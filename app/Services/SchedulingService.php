<?php 

namespace App\Services;

use App\Repositories\SchedulingRepository;
use App\Contracts\SchedulingInterface;

class SchedulingService implements SchedulingInterface 
{

    private $schedulingRepository;

    public function __construct(SchedulingRepository $schedulingRepository)
    {
        $this->schedulingRepository = $schedulingRepository;
    }

    public function index()
    {
        return $this->schedulingRepository->index();
    }

    public function save($request)
    {
        return $this->schedulingRepository->save($request);
    }

    public function update($request)
    {
        return $this->schedulingRepository->update($request);
    }

    public function delete($request)
    {
        return $this->schedulingRepository->delete($request->id);
    }

    public function findOne($request)
    {
        return $this->schedulingRepository->findOne($request->id);
    }

    public function findAllDoctors()
    {
        return $this->schedulingRepository->findAllDoctors();
    }

    public function findAllPatients()
    {
        return $this->schedulingRepository->findAllPatients();
    }

}
