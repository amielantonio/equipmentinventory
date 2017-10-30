<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{


    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipment(){
        return $this->hasMany('App\Equipment');
    }

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computer(){
        return $this->hasOne('App\Computer');
    }
}
