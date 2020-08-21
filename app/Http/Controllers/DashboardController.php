<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
    	$siswa = Siswa::all();
    	$siswa->map(function($s){

    	});
    	dd($siswa);
    	return view('dashboard.index');
    }
}
