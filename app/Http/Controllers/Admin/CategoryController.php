<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //

    public function index(){
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:categories',
            'image' => 'required|image:jpg,png,jpeg'
        ]);
        $category =new  Category();
        $category->name = $request->name;
       
        
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = rand(0000,9999).$file->getClientOriginalName();
            $file->move(public_path('admin/images/category'),$fileName);
            $category->image = $fileName;
          
        }
        $category->status = 'A';
        $category->save();
        return back()->with('success','Product successfully added.');
      
     
    }
    public function edit($id){
     
        $data['categories'] = Category::all();
        $data['s_category'] = Category::find($id);
      
        return view('admin.categories.edit',$data);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|unique:categories',
            'image' => 'required|image:jpg,png,jpeg'
        ]);

        $category = Category::where('id',$id)->first();
        $category->name = $request->name;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink($category->image);
            $fileName = rand(0000,9999).$file->getClientOriginalName();
            $file->move(public_path('admin/images/category'),$fileName);
            $category->image = $fileName;
        }
        $category->status = $request->status;
        $category->save();
        return redirect()->route('category')->with('success','Category updated successfully.');
    }

    public function active($id){
        $category = Category::where('id',$id)->first();
        if($category->status == 'A'){
            $category->status = 'D';
        }
        else{
            $category->status = 'A';
        }
        $category->save();
        return redirect()->route('category')->with('success','Category Activation successfully.');
    }
    public function destroy($id){
        $category = Category::where('id',$id)->delete();
        @unlink($category->image);
        return redirect()->route('category')->with('success','Category Deleted successfully.');
        
    }
}
