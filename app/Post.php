<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable = ['title', 'content', 'thumbnail', 'slug', 'user_id'];
	protected $dates = ['created_at'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function thumbnail()
    {
    	return !$this->thumbnail ? asset('no-thumbnail.jpg') : $this->thumbnail;
    }
}
