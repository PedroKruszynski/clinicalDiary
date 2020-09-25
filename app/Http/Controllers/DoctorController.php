<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DoctorService;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{

    private $doctorService;

    public function __construct(DoctorService $doctorService)
    {
        $this->middleware('auth');
        $this->doctorService = $doctorService;
    }

    public function index(Request $request)
    {
        $doctors = $this->doctorService->index();
        return view('Doctor.DoctorIndex', compact('doctors'));
    }

    public function createAndAlterView(Request $request)
    {

        $doctor = isset($request->id) ? $this->doctorService->findOne($request) : null;
        return view('Doctor.DoctorCreateAndAlter', compact('doctor'));
    }

    public function save(DoctorRequest $request)
    {
        $this->doctorService->save($request);
        return redirect()->action('DoctorController@index');
    }

    public function update(DoctorRequest $request)
    {
        $this->doctorService->update($request);
        return redirect()->action('DoctorController@index');
    }

    public function delete(Request $request)
    {
        $this->doctorService->delete($request);
        return redirect()->action('DoctorController@index');
    }

}
