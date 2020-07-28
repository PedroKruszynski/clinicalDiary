<?php

namespace App\Contracts;

use Symfony\Component\HttpFoundation\Request;
// use App\Http\Requests\DoctorRequest;

interface PatientInterface {

    public function index();

    public function save(Request $request);

    public function delete(Request $request);

    public function findOne($request);

    public function update(Request $request);

    // public function findAnwser(Request $request);

}
