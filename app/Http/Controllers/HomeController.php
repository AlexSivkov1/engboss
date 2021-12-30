<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::query()->with('products')->paginate(10);
        $products = Product::query()->orderBy('views', 'desc')->paginate(8);
        $high_st_products = Product::query()->where('status_id', '1')->paginate(8);



        return view('home.index', compact('categories', 'products', 'high_st_products'));

    }
}
