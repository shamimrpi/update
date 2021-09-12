<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontCartController extends Controller
{
    public function cartView(){
    	return view('website.cart');
    }
}
