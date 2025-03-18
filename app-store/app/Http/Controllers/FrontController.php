<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class FrontController extends Controller
{
    public function index(){
        $products = Product::take(3)->get();
        $categories = Category::all();
        // $product = Category::with('categories')->get();
        // return view('home.index', compact('categories'));
        return view('home.index',compact('products','categories'));
    }
}
