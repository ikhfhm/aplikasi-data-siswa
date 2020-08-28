<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
