<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     $skinProducts = Product::where('category_id', 1)->get();

    //     $hairProducts = Product::where('category_id', 2)->get();

    //     $bodyProducts = Product::where('category_id', 3)->get();

    //     $perfumeProducts = Product::where('category_id', 4)->get();

    //     return view('home', compact(
    //         'skinProducts',
    //         'hairProducts',
    //         'bodyProducts',
    //         'perfumeProducts'
    //     ));
    // }
    public function index()
    {
        $categories = Category::with('products')->get();

        return view('home', compact('categories'));
    }
}
