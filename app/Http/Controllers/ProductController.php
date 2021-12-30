<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {



        // запись в SESSION
/*        session([
            'cart'=>[
                1=>[

                    'id'=> '1',
                    'title'=> 'Product 1',
                    'price'=> '450',
                    'qty'=> '2',

                ],
                3=>[

                    'id'=> '3',
                    'title'=> 'Product 3',
                    'price'=> '450',
                    'qty'=> '2',

                ]



            ]

        ]);*/

/*получааем значения*/
/*dump(session('cart.3.price'));*/
/* пройтись в цикле*/
/*foreach (session('cart') as $item){

    dump($item['title'], $item['price']);
}*/
/* дописываем значение Колличества*/
/*session(['cart.3.qty' => session('cart.3.qty')+4]);*/

/*  добавим одиночные значения*/
/*session(['cart_qty' =>33, 'cart_total'=>10]);*/

        $products = Product::with('category', 'status')->orderBy('id', 'desc')->paginate(10);



        return view('product.index', compact('products'));



    }
    public function show($slug)
    {
        $product = Product::query()->with('category','status', 'brand' )->where('slug', $slug)->firstOrFail();

        return view('product.show', compact('product'));

    }


}
