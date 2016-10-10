<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class resController extends Controller
{
    //
    public function res()
    {
    	return view('res.index');
    }
}
