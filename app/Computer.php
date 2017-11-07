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

    /**
     * Get Employee resources associated with the user
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getEmployeeInfoAttribute(){

        return $this->employee()->get();

    }

    /**
     * One to One Relationship with Workstation Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workstation(){

        return $this->belongsTo( 'App\Workstation', 'computer_id');

    }

}
