<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index(){
       return  view('admin.brands.index');
    }

    public function create(){
        return  view('admin.brands.add');
    }


    public function store(Request $req){
        // return $req->all();
        $req->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
        ]);

        Brand::insert([
            'name' => $req->name,
        ]);

        return redirect()->back()->with('status','Brands added successfully');
    }

    public function delete($id){
    
        $brand = Brand::findOrFail($id)->delete();

        return redirect()->back()->with('status','Brands deleted successfully');
    }
}
