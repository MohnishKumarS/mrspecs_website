<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::all();
        return view('admin.category.view',compact('category'));
    }

    public function add_category(){
        return view('admin.category.add');
    }

    public function store_category(CategoryFormRequest $req){
        // return $req;

       $validateData = $req->validated();
       
       $cat = new Category();

       $cat->name = $validateData['name'];
       $cat->slug = Str::slug($validateData['slug']);
       if($req->hasFile('image')){
        $file = $req->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('image/category'),$fileName);

        $cat->image = $fileName;
       }

       $cat->save();


       return redirect('admin/category')->with('status','Category added successfully');
     

    }   


    public function edit(Category $category){
        // return $category;
        return view('admin.category.edit',compact('category'));
    }

    public function update(CategoryFormRequest $req,$id){
        $validateData = $req->validated();
       
        $cat = Category::findOrFail($id);
 
        $cat->name = $validateData['name'];
        $cat->slug = Str::slug($validateData['slug']);
        if($req->hasFile('image')){
            // -- delete existing image ---
            $path = public_path('image/category/'.$cat->image);
            if(File::exists($path)){
                File::delete($path);
            }

         $file = $req->file('image');
         $fileName = time() . '.' . $file->getClientOriginalExtension();
 
         $file->move(public_path('image/category'),$fileName);
 
         $cat->image = $fileName;
        }
 
        $cat->update();
 
 
        return redirect('admin/category')->with('status','Category updated successfully');
    }
}
