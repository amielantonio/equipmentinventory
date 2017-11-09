<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    /**
     * Employee Model has one Computer Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computer()
    {
        return $this->hasOne('App\Computer');
    }

    /**
     * Employee Model belongs to Workstation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function workstation()
    {
        return $this->hasOne( 'App\Workstation');
    }

}
