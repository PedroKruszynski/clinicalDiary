<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
// use App\Http\Requests\DoctorRequest;

class UserController extends Controller
{

    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $users = $this->userService->index();
        return view('User.UserIndex', compact('users'));
    }

    public function createAndAlterView(Request $request)
    {
        $user = isset($request->id) ? $this->userService->findOne($request) : null;
        return view('User.UserCreateAndAlter', compact('user'));
    }

    public function save(Request $request)
    {
        $this->userService->save($request);
        return redirect()->action('UserController@index');
    }

    public function update(Request $request)
    {
        $this->userService->update($request);
        return redirect()->action('UserController@index');
    }

    public function delete(Request $request)
    {
        $this->userService->delete($request);
        return redirect()->action('UserController@index');
    }

}
