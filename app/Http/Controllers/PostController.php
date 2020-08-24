<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	$users = User::all();
    	return view('posts.index',compact(['paste']));
    }
}
