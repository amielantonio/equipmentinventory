<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Workstation extends Model
{

    /**
     * Eloquent Relationship for Computer
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function computer(){
        return $this->hasOne('App\Computer');
    }

    /**
     * Eloquent Relationship for Employee
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function employee(){
        return $this->hasOne('App\Employee');
    }
}
