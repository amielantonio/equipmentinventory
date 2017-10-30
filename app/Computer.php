<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{


    /**
     * Eloquent Relationship for Employee
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(){
        return $this->belongsTo('App\Employee', 'computer_id');
    }

    /**
     * Eloquent Relationship for Workstation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workstation(){
        return $this->belongsTo('App\Workstation', 'computer_id');
    }

    /**
     * Eloquent Relationship for Equipment
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipment(){
        return $this->hasMany('App\Equipment');
    }

}
