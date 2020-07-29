<?php 

namespace App\Services;

use App\Repositories\PatientRepository;
use App\Contracts\PatientInterface;

class PatientService implements PatientInterface 
{

    private $patientRepository;

    public function __construct(PatientRepository $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

    public function index()
    {
        return $this->patientRepository->index();
    }

    public function save($request)
    {
        return $this->patientRepository->save($request);
    }

    public function update($request)
    {
        return $this->patientRepository->update($request);
    }

    public function delete($request)
    {
        return $this->patientRepository->delete($request->id);
    }

    public function findOne($request)
    {
        return $this->patientRepository->findOne($request->id);
    }

}
