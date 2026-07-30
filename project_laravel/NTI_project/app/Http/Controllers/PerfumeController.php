<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
       public function index()
    {
        $perfumes = Product::where('category_id', 4)->get();

        return view('perfume.index', compact('perfumes'));
    }
}
