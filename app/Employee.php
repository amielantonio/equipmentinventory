<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Equipment;

class Employee extends Model
{


    public function equipments(){
        return $this->hasMany('Equipment');
    }
}
