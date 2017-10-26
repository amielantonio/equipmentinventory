<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Computer;

class Equipment extends Model
{

    /**
     * Eloquent Relationship for Computer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function computer(){
        return $this->belongsTo('Computer');
    }

}
