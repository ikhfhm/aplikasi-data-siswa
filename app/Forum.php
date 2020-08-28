<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';

    public funtion user(){
        return $this->belongsTo(User::class);
    }
}
