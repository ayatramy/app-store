<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.index',compact('products','categories'));
        // $products = DB::table('products')->get();
        // return view('admin.products.index', compact('products'));

    }

    // public function getCreate(){
    //     $products = DB::table('products')->get();
    //     $categories = Category::all();
    //     return view('admin.products.create', compact('products','categories'));
    // }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
        // $product_name = $_POST['name'];
        // $quantity = $_POST['quantity'];
        // $price = $_POST['price'];
        // $category = $_POST['category'];

        // DB::table('products')->insert([
        //     'name' => $product_name,
        //     'quantity' => $quantity,
        //     'price' => $price,
        //     'category' => $category,
        // ]);
        // $categories = DB::table('categories')->get();

        // return view('admin.products.create',compact('categories'));
    }

    public function store(Request $request){
        $product = new Product;

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->description = $request->description;

        $product->save();
        return redirect()->back();
    }

    public function destroy($id){
        Product::find($id)->delete();
        return redirect()->back();
        // DB::table('products')->where('id', $id)->delete();
        // return redirect()->back();
        // return view('admin.products.index');
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        $category_name = Category::find($product->category_id);
        // $category_name = Category::where('id',$product->category_id)->first();
        return view('admin.products.edit',compact('product','categories','category_name'));
        // $product = DB::table('products')->where('id', $id)->first();
        // $products = DB::table('products')->get();
        // $categories = DB::table('categories')->get();
        // return view('admin.products.edit', compact('product', 'products'));
    }

    public function update(Request $request,$id){
        $product = Product::find($id);

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        $product->save();
        return redirect('products');
        // $id = $_POST['id'];
        // DB::table('products')->where('id',$id)->update([
        //     'name' => $_POST['name'],
        //     'quantity' => $_POST['quantity'],
        //     'price' => $_POST['price'],
        //     'category' => $_POST['category'],
        // ]);
        // // $products = DB::table('products')->get();
        // return redirect('admin/products');
    }

    public function filter(Request $request)
    {
        $categoryId = $request->input('category_id');
        $products = $categoryId ? Product::where('category_id', $categoryId)->get() : Product::all();
        return response()->json($products);
    }
}
