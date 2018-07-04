<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ProfileUpdateRequest;
use App\User;

class ProfileController extends Controller
{
    public function update(ProfileUpdateRequest $request, $id)
    {
        try {
            $req = $request->except('avater');

            if ($request->has('password')) {
                $req['password'] = bcrypt($request->password);
            }

            if ($request->hasFile('avater')) {
                $avater = $request->avater->store('profile/avater', 'public');
                $req = array_add($req, 'avater', $avater);
            }

            $user = User::find($id);

            $user->update($req);

            $response = [
                'message' => 'Profile updated.',
                'data' => $user->toArray(),
            ];

            return response()->json($response);

        } catch (ValidatorException $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessageBag()
            ]);
        }
    }
}
