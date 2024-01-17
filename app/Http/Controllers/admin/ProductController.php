<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductFormRequest;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.view');
    }

    public function create()
    {
        $cat = Category::all();
        $brand = Brand::all();
        return view('admin.product.add', compact('cat','brand'));
    }

    public function store(ProductFormRequest $req)
    {
        // return $req['popular'];
        $validate = $req->validated();
        // return $req->all();
        // return $validate;

        $cat = Category::findOrFail($validate['category_id']);
        // $images = [];
        if ($cat) {

            $images = array();

            if ($files = $req->file('images')) {
                foreach ($files as $file) {

                    $ext = \strtolower($file->getClientOriginalExtension());
                    $img_name =  rand(100, 100000) . '.' . $ext;
                    $destinate = \public_path('image/product');
                    $file->move($destinate, $img_name);

                    $images[] = $img_name;
                }
            }

            $cat->products()->create([
                'category_id' => $validate['category_id'],
                'name' => $validate['name'],
                'slug' => Str::slug($validate['slug']),
                'original_price' => $validate['org_price'],
                'selling_price' => $validate['sell_price'],
                'quantity' => $validate['quantity'],
                'brand' => $validate['brand'],
                'shape' => $validate['shape'],
                'trending' => $req['trending'] == true ? true : false,
                'popular' => $req['popular'] == true ? true : false,
                'image'  => implode(',', $images)
            ]);

            return redirect('admin/product')->with('status', 'Product added successfully');
        }
    }


    public function edit($id)
    {
        $pro = Product::findOrFail($id);
        $cat = Category::all();
        $brand = Brand::all();
        return view('admin.product.edit', compact('pro', 'cat','brand'));
    }

    public function update(ProductFormRequest $req, $id)
    {
        $validate = $req->validated();
        $pro = Category::findOrFail($validate['category_id'])->products()->where('id', $id)->first();
        // return $p;
        // $pro = Product::findOrFail($id);
        // return $pro;
        $pro->update([
            'category_id' => $validate['category_id'],
            'name' => $validate['name'],
            'slug' => Str::slug($validate['slug']),
            'original_price' => $validate['org_price'],
            'selling_price' => $validate['sell_price'],
            'quantity' => $validate['quantity'],
            'brand' => $validate['brand'],
            'shape' => $validate['shape'],
            'trending' => $req['trending'] == true ? true : false,
            'popular' => $req['popular'] == true ? true : false,
        ]);
        $images = array();

        if ($files = $req->file('images')) {
            foreach ($files as $file) {

                $ext = \strtolower($file->getClientOriginalExtension());
                $img_name =  rand(100, 100000) . '.' . $ext;
                $destinate = \public_path('image/product');
                $file->move($destinate, $img_name);

                $images[] = $img_name;
            }

            $pro->image = implode(',', $images);
            $pro->update();
        }

        return redirect('admin/product')->with('status', 'Product updated successfully');
    }


    public function delete($id)
    {
        $pro = Product::findOrFail($id);

        if ($pro->image) {
            $all_img = explode(',', $pro->image);
            return $all_img;
            foreach ($all_img as $val) {
                $path = \public_path('image/product/' . $val);
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        }

        $pro->delete();

        return redirect('admin/product')->with('status', 'Product deleted successfully');
    }
}
