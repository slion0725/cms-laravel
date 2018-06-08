<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use App\User;

class ProfileController extends Controller
{
    public function update(ProfileUpdateRequest $request, $id)
    {
        $user = User::find($id);

        if ($request->has('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
        }

        $user->update($request->all());

        $response = [
            'message' => 'Profile updated.',
            'data' => $user->toArray(),
        ];

        return response()->json($response);
    }
}
