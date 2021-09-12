<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProductCategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
    public function create(){
    	return view('admin.categories.create');
    }


     public function store(Request $request)
    {

        $exist_cat = Category::where('name',$request->name)->first();
        if($exist_cat){
            return redirect()->route('product.category')->with('error','Category already Added');
        }
        $category = new Category();
        $category->name =$request->name;
        $category->save();
        return redirect()->route('product.category')->with('message','Category Created Successfully');
    }
    public function edit($id){

    	$category = Category::find($id);
    	return view('admin.categories.edit',compact('category'));

    }
    public function update(Request $request,$id){
         $exist_cat = Category::where('name',$request->name)->first();
        if($exist_cat){
            return redirect()->route('product.category')->with('error','Category already Added');
        }
    	$category = Category::where('id',$id)->first();
 
        $category->name = $request->name;
        $category->save();
        return redirect()->route('product.category')->with('message','Category updated Successfully');
    }
    public function destroy($id){
       Category::find($id)->delete();

        return redirect()->route('product.category')->with('message','Category Deleted Successfully');
    }
}
