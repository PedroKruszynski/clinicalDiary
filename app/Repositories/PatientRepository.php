<?php 

namespace App\Repositories;

use App\Patient;
use Illuminate\Support\Facades\DB;

class PatientRepository 
{

    private $patient;

    public function __construct(Patient $patient)
    {
        $this->patient = $patient;
    } 

    public function index()
    {
        $patient = $this->patient->all();
        return $patient;
    }

    public function save($request)
    {
        $patient = $this->patient;
        $patient->name = $request->name;
        $patient->cpf = $request->cpf;
        $patient->date_of_birth = $request->date;
        $patient->telephone = $request->telephone;
        $patient->email = $request->email;
        $patient->save();
    }

    public function delete($id)
    {
        $patient = $this->patient->find($id);
        $patient->delete();
    }

    public function update($request)
    {
        $patient = $this->patient->find($request->id);
        $patient->name = $request->name ? $request->name : $patient->name;
        $patient->cpf = $request->cpf ? $request->cpf : $patient->cpf;
        $patient->date_of_birth = $request->date ? $request->date : $patient->date_of_birth;
        $patient->telephone = $request->telephone ? $request->telephone : $patient->telephone;
        $patient->email = $request->email ? $request->email : $patient->email;
        $patient->save();
    }

    public function findOne($id)
    {
        $patient = $this->patient->find($id);
        return $patient;
    }
    
}
