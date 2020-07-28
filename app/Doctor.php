<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $table = 'doctor';

   protected $fillable = [  
                            'name', 
                            'cpf', 
                            'date_of_birth', 
                            'telephone', 
                            'specialty',
                            'crm'
                        ];

    public $timestamps = false;

}
