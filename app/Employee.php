<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Equipment;

class Employee extends Model
{


    public function equipment(){
        return $this->hasMany('Equipment');
    }
}
