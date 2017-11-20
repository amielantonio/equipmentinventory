<?php

namespace App;

use App\Computer;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{


    /**
     * Diagnostics belongs to Computer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function computer()
    {
        return $this->belongsTo('App\Computer');
    }
}
