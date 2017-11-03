<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;


class Computer extends Model
{

    protected $appends = ['employee_info'];

    /**
     * One to One Relationship with Employee Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(){
        return $this->belongsTo('App\Employee', 'computer_id');

    }

    public function getEmployeeInfoAttribute(){

        return $this->employee()->get();

    }

}
