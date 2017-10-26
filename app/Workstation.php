<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Computer;


class Workstation extends Model
{

    /**
     * Eloquent Relationship for Computer
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function computer(){
        return $this->has('Computer');
    }

    /**
     * Eloquent Relationship for Employee
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function employee(){
        return $this->has('Employee');
    }
}
