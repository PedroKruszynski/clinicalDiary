<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PatientService;

class PatientController extends Controller
{

    private $patientService;

    public function __construct(PatientService $patientService)
    {
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

    public function save(Request $request)
    {
        $this->patientService->save($request);
        return redirect()->action('PatientController@index');
    }

    public function update(Request $request)
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
