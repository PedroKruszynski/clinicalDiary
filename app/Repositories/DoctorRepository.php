<?php 

namespace App\Repositories;

use App\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorRepository 
{

    private $doctor;

    public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    } 

    public function index()
    {
        $doctor = $this->doctor->all();
        return $doctor;
    }

    public function save($request)
    {
        $doctor = $this->doctor;
        $doctor->name = $request->name;
        $doctor->cpf = $request->cpf;
        $doctor->date_of_birth = $request->date;
        $doctor->telephone = $request->telephone;
        $doctor->specialty = $request->specialty;
        $doctor->crm = $request->crm;
        $doctor->save();
    }

    public function delete($id)
    {
        $doctor = $this->doctor->find($id);
        $doctor->delete();
    }

    public function update($request)
    {
        $doctor = $this->doctor->find($request->id);
        $doctor->name = $request->name ? $request->name : $doctor->name;
        $doctor->cpf = $request->cpf ? $request->cpf : $doctor->cpf;
        $doctor->date_of_birth = $request->date ? $request->date : $doctor->date_of_birth;
        $doctor->telephone = $request->telephone ? $request->telephone : $doctor->telephone;
        $doctor->specialty = $request->specialty ? $request->specialty : $doctor->specialty;
        $doctor->crm = $request->crm ? $request->crm : $doctor->crm;
        $doctor->save();
    }

    public function findOne($id)
    {
        $doctor = $this->doctor->find($id);
        return $doctor;
    }
    
}
