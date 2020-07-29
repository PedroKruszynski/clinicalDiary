<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SchedulingService;
// use App\Http\Requests\DoctorRequest;

class SchedulingController extends Controller
{

    private $schedulingService;

    public function __construct(SchedulingService $schedulingService)
    {
        $this->schedulingService = $schedulingService;
    }

    public function index(Request $request)
    {
        $schedulings = $this->schedulingService->index();
        return view('Scheduling.SchedulingIndex', compact('schedulings'));
    }

    public function createAndAlterView(Request $request)
    {
        $scheduling = isset($request->id) ? $this->schedulingService->findOne($request) : null;
        $doctors    = $this->schedulingService->findAllDoctors();
        $patients   = $this->schedulingService->findAllPatients();
        return view('Scheduling.SchedulingCreateAndAlter', compact('scheduling', 'doctors' , 'patients'));
    }

    public function save(Request $request)
    {
        $this->schedulingService->save($request);
        return redirect()->action('SchedulingController@index');
    }

    public function update(Request $request)
    {
        $this->schedulingService->update($request);
        return redirect()->action('SchedulingController@index');
    }

    public function delete(Request $request)
    {
        $this->schedulingService->delete($request);
        return redirect()->action('SchedulingController@index');
    }

}
