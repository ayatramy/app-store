<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;


class FrontController extends Controller
{
    public function index(Request $request)
    {
        // استرجاع الأصناف من قاعدة البيانات
        $categories = Category::all();

        // إذا تم تحديد صنف، عرض المنتجات بناءً على الصنف المحدد
        if ($request->has('category_id') && $request->category_id != '') {
            $products = Product::where('category_id', $request->category_id)->get();
        } else {
            // إذا لم يتم تحديد صنف، عرض جميع المنتجات
            $products = Product::all();
        }

        return view('home.index', compact('products', 'categories'));
    }
    // public function index(){
    //     $products = Product::take(3)->get();
    //     $categories = Category::all();
    //     // $product = Category::with('categories')->get();
    //     // return view('home.index', compact('categories'));
    //     return view('home.index',compact('products','categories'));
    // }
}
// namespace App\Http\Controllers;

// use App\Models\Product;
// use App\Models\Category;
// use Illuminate\Http\Request;

// class HomeController extends Controller
// {

// }
