<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontContactController extends Controller
{
    public function contact(){
    	return view('website.contact');
    }
}
