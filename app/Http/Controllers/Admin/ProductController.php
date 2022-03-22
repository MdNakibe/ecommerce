<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    const UPLOADE_DIR = '/assets/uploads/products';
    public function index(){
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function add() {
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }
    public function insert(Request $request) {
        $products = new Product();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            //$file->move('/assets/uploads/category'.$filename);
            $file->move(public_path(self::UPLOADE_DIR),$filename);
            $products->image = $filename;
        }
        $products->cate_id = $request->input('cate_id');
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->description = $request->input('description');
        $products->small_description = $request->input('small_description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->qty = $request->input('qty');
        $products->tax = $request->input('tax');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_description = $request->input('meta_description');
        $products->save();
        return redirect('products')->with('status',"products Add Successfully");
    }
    public function edit($id) {
        $category = Category::all();
        $products = Product::find($id);
        return view('admin.product.edit',compact('products','category'));
    }

    public function update(Request $request, $id) {
        $products = Product::find($id);
        if($request->hasFile('image')){
            $path = 'assets/uploads/products/'.$products->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            //$file->move('/assets/uploads/category'.$filename);
            $file->move(public_path(self::UPLOADE_DIR),$filename);
            $products->image = $filename;
        }
        $products->cate_id = $request->input('cate_id');
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->description = $request->input('description');
        $products->small_description = $request->input('small_description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->qty = $request->input('qty');
        $products->tax = $request->input('tax');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_description = $request->input('meta_description');
        $products->save();
        return redirect('products')->with('status',"products Update Successfully");
    }

    public function destroy($id) {
        $products = Product::find($id);
        if ($products->image) {
            $path = 'assets/uploads/products/'.$products->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $products->delete();
        return redirect('products')->with('status',"Products Delete Successfully");
    }
}
