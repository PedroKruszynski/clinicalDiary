<?php

namespace App\Contracts;

use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\DoctorRequest;

interface DoctorInterface {

    public function index();

    public function save(DoctorRequest $request);

    public function delete(Request $request);

    public function findOne($request);

    public function update(DoctorRequest $request);

}
