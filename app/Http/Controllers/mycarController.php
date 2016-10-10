<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mycarController extends Controller
{
    //
    public function mycar()
    {
    	return view('mycar.index');
    }
}
