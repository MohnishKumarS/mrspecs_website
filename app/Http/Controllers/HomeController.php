<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void/
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $category = Category::latest()->get();
        $trending = Product::where('trending',1)->take(10)->get();
        $popular = Product::where('popular',1)->take(10)->get();
        // return $trending;
//         return DB::statement("SHOW GRANTS FOR 'u420711359_newspecs'@'127.0.0.1'");
//  $connection = mysqli_connect('mrspecs.xtremerental.shop','u420711359_newspecs','Newspecs007','u420711359_newspecs');
//  return     $conn = new PDO("mysql:host=xtremerental.shop;port=3306;dbname=u420711359_newspecs", "u420711359_newspecs", "Newspecs007"); 
//         return $conn;
        return view('home',compact('category','trending','popular'));
    }

    public function next(){
        return "hello moni";
    }


    public function productViewAll($slug){
        $cat = Category::where('slug',$slug)->first();
        if($cat){
            $products =  $cat->products()->get();
            return view('products.all-products',compact('products','cat'));
        }else{
            return redirect()->back();
        }
    }

    public function singleProductView($cat_slug,$pro_slug){
        
        $cat = Category::where('slug',$cat_slug)->first();

        if($cat){
            $pro = $cat->products()->where('slug',$pro_slug)->first();

            if($pro){
              
                return view('products.single-product',compact('pro','cat'));
            }else{
                return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }
    }
}
