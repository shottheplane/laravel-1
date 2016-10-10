<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class inforController extends Controller
{
    //
    public function infor()
    {
    	return view("infor.index");
    }
}
