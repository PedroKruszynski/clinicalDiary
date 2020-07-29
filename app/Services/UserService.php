<?php 

namespace App\Services;

use App\Repositories\UserRepository;
use App\Contracts\UserInterface;

class UserService implements UserInterface 
{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $this->userRepository->index();
    }

    public function save($request)
    {
        return $this->userRepository->save($request);
    }

    public function update($request)
    {
        return $this->userRepository->update($request);
    }

    public function delete($request)
    {
        return $this->userRepository->delete($request->id);
    }

    public function findOne($request)
    {
        return $this->userRepository->findOne($request->id);
    }

}
