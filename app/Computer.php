<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Computer extends Model
{

    protected $appends = ['employees'];



    /**
     * Eloquent Relationship for Employee
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(){
        return $this->belongsTo('App\Employee', 'computer_id');
    }


    /**
     * Add Assigned Employee to the computer as a response along with the computer response
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getEmployeesAttribute(){

        return $this->employee()->get();
    }
}
