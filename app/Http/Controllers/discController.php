<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class discController extends Controller
{
    //
    public function disc()
    {
    	return view('disc.index');
    }
}
