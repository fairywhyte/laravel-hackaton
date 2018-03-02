<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $table = "polls";

    // public function articles()
    // {
    //     return $this->hasMany('App\Comment');
    //     //Categories has many articles
    // }
}
