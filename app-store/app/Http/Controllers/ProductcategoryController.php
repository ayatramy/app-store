<?php

namespace App\Http\Controllers;
use App\Models\productcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductcategoryController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        // $pro_cate = productcategory::where('user_id', Auth::id());
        return view('product_category');
    }
}
