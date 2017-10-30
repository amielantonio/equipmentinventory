<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Workstation;
use App\Equipment;

class Computer extends Model
{


    /**
     * Eloquent Relationship for Employee
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(){
        return $this->belongsTo('Employee', 'computer_id');
    }

    /**
     * Eloquent Relationship for Workstation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workstation(){
        return $this->belongsTo('Workstation', 'computer_id');
    }

    /**
     * Eloquent Relationship for Equipment
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipment(){
        return $this->hasMany('Equipment');
    }

}
