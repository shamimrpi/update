<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminProductController extends Controller
{
    public function create(){
    	$categories = Category::all();
    	return view('admin.product.create',compact('categories'));
    }
}
