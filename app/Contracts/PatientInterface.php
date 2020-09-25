<?php

namespace App\Contracts;

use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\PatientRequest;

interface PatientInterface {

    public function index();

    public function save(PatientRequest $request);

    public function delete(Request $request);

    public function findOne($request);

    public function update(PatientRequest $request);

}
