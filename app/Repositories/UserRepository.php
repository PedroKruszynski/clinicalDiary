<?php 

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserRepository 
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    } 

    public function index()
    {
        $user = $this->user->all();
        return $user;
    }

    public function save($request)
    {
        $user = $this->user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }

    public function delete($id)
    {
        $user = $this->user->find($id);
        $user->delete();
    }

    public function update($request)
    {
        $user = $this->user->find($request->id);
        $user->name = $request->name ? $request->name : $user->name;
        $user->email = $request->email ? $request->email : $user->email;
        $user->password = $request->password ? Hash::make($request->password) : $user->password;
        $user->save();
    }

    public function findOne($id)
    {
        $user = $this->user->find($id);
        return $user;
    }
    
}
