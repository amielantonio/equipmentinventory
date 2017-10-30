<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{

    /**
     * One to Many Relationship for Computer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function computer(){
        return $this->belongsTo('App\Computer', 'equipment_id');
    }

    /**
     * One to One Relationship for Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo( 'App\Category','category_id');
    }

}
