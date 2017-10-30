<?php

namespace App;

use App\Equipment;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipment(){
        return $this->hasMany('Equipment');
    }

}
