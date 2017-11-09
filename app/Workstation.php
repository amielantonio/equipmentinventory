<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Workstation extends Model
{

//    protected $casts = [
//        'options' => 'array'
//    ];

    /**
     * Workstation Belongs To Computer
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function computer()
    {
        return $this->belongsTo('App\Computer', 'computer_id');
    }

    /**
     * Workstation Belongs To Employee
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function employee()
    {
        return $this->belongsTo('App\Employee', 'employee_id');
    }
}
