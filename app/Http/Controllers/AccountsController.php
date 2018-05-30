<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AccountCreateRequest;
use App\Http\Requests\AccountUpdateRequest;
use App\Repositories\AccountRepository;
use App\Validators\AccountValidator;
use App\Entities\Account;
use App\Transformers\AccountTransformer;
use DataTables;
/**
 * Class AccountsController.
 *
 * @package namespace App\Http\Controllers;
 */
class AccountsController extends Controller
{
    /**
     * @var AccountRepository
     */
    protected $repository;

    /**
     * @var AccountValidator
     */
    protected $validator;

    /**
     * AccountsController constructor.
     *
     * @param AccountRepository $repository
     * @param AccountValidator $validator
     */
    public function __construct(AccountRepository $repository, AccountValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $accounts = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $accounts,
            ]);
        }

        return view('accounts.index', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AccountCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(AccountCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $account = $this->repository->create($request->all());

            $response = [
                'message' => 'Account created.',
                'data' => $account->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $account,
            ]);
        }

        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $account,
            ]);
        }

        return view('accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AccountUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(AccountUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->setId($id)->passesOrFail(ValidatorInterface::RULE_UPDATE);

            if ($request->password != null) {

                $request->merge(['password' => bcrypt($request->password)]);

                $account = $this->repository->update($request->all(), $id);
            } else {

                $account = $this->repository->update($request->except('password'), $id);
            }

            $response = [
                'message' => 'Account updated.',
                'data' => $account->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Account deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Account deleted.');
    }

    public function datatables()
    {
        $model = Account::query();
        return Datatables::eloquent($model)
            ->setTransformer(new AccountTransformer)
            ->make(true);
    }
}
