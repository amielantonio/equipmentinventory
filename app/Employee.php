<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    /**
     * Appends computer data to every json and array response
     *
     * @var array
     */
    protected $appends = ['computer_info'];

    /**
     * One to One Relationship with Computer Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computer(){
        return $this->hasOne('App\Computer');
    }

    /**
     * Accessor to get computer data
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getComputerInfoAttribute(){
        return $this->computer()->get();
    }
}
