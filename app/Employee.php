<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Equipment;
use App\Computer;

class Employee extends Model
{


    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipment(){
        return $this->hasMany('Equipment');
    }

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computer(){
        return $this->hasOne('Computer');
    }
}
