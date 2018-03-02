<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table ="options";
    public function option()
    {
     return $this->belongsTo('App\Poll','poll_id');
    }
}
