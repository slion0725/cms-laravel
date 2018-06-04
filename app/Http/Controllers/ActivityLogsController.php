<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ActivityLogCreateRequest;
use App\Http\Requests\ActivityLogUpdateRequest;
use App\Repositories\ActivityLogRepository;
use App\Validators\ActivityLogValidator;
use App\Entities\ActivityLog;
use DataTables;

/**
 * Class ActivityLogsController.
 *
 * @package namespace App\Http\Controllers;
 */
class ActivityLogsController extends Controller
{
    /**
     * @var ActivityLogRepository
     */
    protected $repository;

    /**
     * @var ActivityLogValidator
     */
    protected $validator;

    /**
     * ActivityLogsController constructor.
     *
     * @param ActivityLogRepository $repository
     * @param ActivityLogValidator $validator
     */
    public function __construct(ActivityLogRepository $repository, ActivityLogValidator $validator)
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
        $activityLogs = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activityLogs,
            ]);
        }

        return view('activityLogs.index', compact('activityLogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ActivityLogCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ActivityLogCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $activityLog = $this->repository->create($request->all());

            $response = [
                'message' => 'ActivityLog created.',
                'data' => $activityLog->toArray(),
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
        $activityLog = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activityLog,
            ]);
        }

        return view('activityLogs.show', compact('activityLog'));
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
        $activityLog = $this->repository->find($id);

        return view('activityLogs.edit', compact('activityLog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ActivityLogUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ActivityLogUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $activityLog = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ActivityLog updated.',
                'data' => $activityLog->toArray(),
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
                'message' => 'ActivityLog deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ActivityLog deleted.');
    }

    public function datatables()
    {
        $model = ActivityLog::query();
        return Datatables::eloquent($model)->make(true);
    }
}
