<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function offers()
    {
        return $this->hasMany('App\offers');
    }

    public function author()
    {
        return $this->belongsTo('App\author', 'author_id');
    }
}
