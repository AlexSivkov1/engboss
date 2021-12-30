<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::query()->with('category', 'brand')->paginate(10);


        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $products = Product::pluck('title', 'id')->all();
        $brands = Brand::pluck('title', 'id')->all();

       /* $products = Product::all();*/
        return view('admin.products.create', compact('categories', 'products', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'nullable|image',
            'brand_id' => 'nullable',
        ]);

        $data = $request->all();

        $data['thumbnail'] = Product::uploadImage($request);

        $product = Product::create($data);


        return redirect()->route('products.index')->with('success', 'Статья добавлена');
    }


    public function edit($id)
    {

        $categories = Category::pluck('title', 'id')->all();
        $brands = Brand::pluck('title', 'id')->all();
        $products = Product::all();
        $product = Product::find($id);
        $brand = Brand::find($id);
        return view('admin.products.edit', compact('categories', 'products', 'product', 'brands', 'brand'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
         'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'price' => 'required',
            'category_id' => 'required|integer',
            'thumbnail'=> 'nullable|image',

        ]);
        $product = Product::find($id);
        $data = $request->all();

        if($file = Product::uploadImage($request, $product->thumbnail)){
            $data['thumbnail'] = $file;
        }
        $product->update($data);


        return redirect()->route('products.index')->with('success', 'Изменения сохранены');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
         $product = Product::find($id);
         Storage::delete($product->thumbnail);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Товар удален');

    }
}
