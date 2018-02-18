<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offers extends Model
{
    protected $fillable = ['email', 'quantity', 'book_name'];

    public function books()
    {
        return $this->belongsTo('App\Books');
    }
}


