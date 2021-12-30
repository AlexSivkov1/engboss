<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{

    public function index()
    {


       $categories = Category::with('products')->get();

       $brands = Brand::all();

//        $products = Product::with('category', 'status')->orderBy('id', 'desc')->paginate(10);
  /*  $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
        $post = Category::where('slug', $slug)->firstOrFail();*/
        return view('category.index', compact( 'categories','brands'));


    }


    public function show($slug){

        $category = Category::query()->where('slug', $slug)->firstOrFail();
        $products = $category->products()->paginate(6);
//        $categories = Category::with('products')->get();



        return view('category.show', compact( 'products', 'category'));

    }
}
