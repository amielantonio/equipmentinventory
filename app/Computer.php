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
}
