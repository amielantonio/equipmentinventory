<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;


class Computer extends Model
{

    /**
     * Computer Model Belongs to Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo('App\Employee', 'employee_id');

    }

    /**
     * Employee has one Workstation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function workstation()
    {

        return $this->hasOne( 'App\Workstation');

    }

    /**
     * Computer has many Diagnostics
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function diagnostics()
    {
        return $this->hasMany('App\Diagnostic');
    }

}
