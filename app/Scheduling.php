<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
   protected $table = 'scheduling';

   protected $fillable = [  
                            'description', 
                            'date_of_scheduling', 
                            'doctor_id', 
                            'patient_id'
                        ];

    
    public $timestamps = false;

}
