<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function profile($id)
    {
    	return view('guru.profile');
    }
}
