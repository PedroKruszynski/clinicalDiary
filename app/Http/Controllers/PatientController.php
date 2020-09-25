<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PatientService;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{

    private $patientService;

    public function __construct(PatientService $patientService)
    {
        $this->middleware('auth');
        $this->patientService = $patientService;
    }

    public function index(Request $request)
    {
        $patients = $this->patientService->index();
        return view('Patient.PatientIndex', compact('patients'));
    }

    public function createAndAlterView(Request $request)
    {

        $patient = isset($request->id) ? $this->patientService->findOne($request) : null;
        return view('Patient.PatientCreateAndAlter', compact('patient'));
    }

    public function save(PatientRequest $request)
    {
        $this->patientService->save($request);
        return redirect()->action('PatientController@index');
    }

    public function update(PatientRequest $request)
    {
        $this->patientService->update($request);
        return redirect()->action('PatientController@index');
    }

    public function delete(Request $request)
    {
        $this->patientService->delete($request);
        return redirect()->action('PatientController@index');
    }

}
