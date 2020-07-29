<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
   protected $table = 'patient';

   protected $fillable = [  
                            'name', 
                            'cpf', 
                            'date_of_birth', 
                            'telephone', 
                            'email'
                        ];

    public $timestamps = false;

}
