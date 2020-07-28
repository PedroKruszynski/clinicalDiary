<?php 

namespace App\Services;

use App\Repositories\DoctorRepository;
use App\Contracts\DoctorInterface;

class DoctorService implements DoctorInterface 
{

    private $doctorRepository;

    public function __construct(DoctorRepository $doctorRepository)
    {
        $this->doctorRepository = $doctorRepository;
    }

    public function index()
    {
        return $this->doctorRepository->index();
    }

    public function save($request)
    {
        return $this->doctorRepository->save($request);
    }

    public function update($request)
    {
        return $this->doctorRepository->update($request);
    }

    public function delete($request)
    {
        return $this->doctorRepository->delete($request->id);
    }

    public function findOne($request)
    {
        return $this->doctorRepository->findOne($request->id);
    }

}
