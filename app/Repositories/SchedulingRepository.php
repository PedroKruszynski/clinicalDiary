<?php 

namespace App\Repositories;

use App\Scheduling;
use App\Doctor;
use App\Patient;
use Illuminate\Support\Facades\DB;

class SchedulingRepository 
{

    private $scheduling;
    private $doctor;
    private $patient;

    public function __construct(Scheduling $scheduling,
                                Doctor $doctor,
                                Patient $patient)
    {
        $this->scheduling = $scheduling;
        $this->doctor = $doctor;
        $this->patient = $patient;
    } 

    public function index()
    {
        $scheduling = $this->scheduling->select(
                                                'patient.name as patient_name', 
                                                'doctor.name as doctor_name',
                                                'scheduling.date_of_scheduling',
                                                'scheduling.id'
                                                )
                                       ->leftJoin('patient', 'scheduling.patient_id', '=', 'patient.id')
                                       ->leftJoin('doctor', 'scheduling.doctor_id', '=', 'doctor.id')
                                       ->get();
        return $scheduling;
    }

    public function save($request)
    {
        $scheduling = $this->scheduling;
        $scheduling->description = $request->description;
        $scheduling->date_of_scheduling = $request->date;
        $scheduling->doctor_id = $request->doctor_id;
        $scheduling->patient_id = $request->patient_id;
        $scheduling->save();
    }

    public function delete($id)
    {
        $scheduling = $this->scheduling->find($id);
        $scheduling->delete();
    }

    public function update($request)
    {
        $scheduling = $this->scheduling->find($request->id);
        $scheduling->description = $request->description ? $request->description : $scheduling->description;
        $scheduling->date_of_scheduling = $request->date ? $request->date : $scheduling->date_of_scheduling;
        $scheduling->doctor_id = $request->doctor_id ? $request->doctor_id : $scheduling->doctor_id;
        $scheduling->patient_id = $request->patient_id ? $request->patient_id : $scheduling->patient_id;
        $scheduling->save();
    }

    public function findOne($id)
    {
        $scheduling = $this->scheduling->select(
                                                'patient.id as patient_id', 
                                                'doctor.id as doctor_id',
                                                'scheduling.description',
                                                'scheduling.date_of_scheduling',
                                                'scheduling.id'
                                                )
                                    ->leftJoin('patient', 'scheduling.patient_id', '=', 'patient.id')
                                    ->leftJoin('doctor', 'scheduling.doctor_id', '=', 'doctor.id')
                                    // ->where('id', $id)
                                    ->get()->first();
        return $scheduling;
    }

    public function findAllDoctors()
    {
        $doctors = $this->doctor->all();
        return $doctors;
    }

    public function findAllPatients()
    {
        $patients = $this->patient->all();
        return $patients;
    }
    
}
