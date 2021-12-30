<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'qty' => 'required|regex:/^[1-9]+[0-9]?$/',
        ]);
        $data = $request->all();

        $product = Product::findOrFail($data['product_id']);
        $cart = new Cart();
        $cart->addToCart($product, $data['qty']);

        return view('cart.cart-modal');
    }

    public function show(){

return view('cart.cart-modal');

    }

    public function delItem($product_id){

        $cart = new Cart();
        $cart->delItem($product_id);
        return view('cart.cart-modal');


    }

    public function clear(){
        session()->forget('cart');
        session()->forget('cart_qty');
        session()->forget('cart_total');
        return view('cart.cart-modal');


    }

    public function checkout(Request $request)
    {
        if($request->method() == 'POST') {
            $request->validate([
                'user_id' =>'integer',
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'address'=>'required',

            ]);


       /*     if (Cache::has('user')) {
                var_dump('user');
            } else {
                dd($request->all());
            }*/
        $data= $request->all();


        DB::transaction(function () use ($data){
            $order_data = array_merge([
                'qty' => session('cart_qty'),
                'total' => session('cart_total'),

                ], $data);
            // сохранение данных в таблицу Заказа (Order)
            $order = Order::create($order_data);

            $order->products()->createMany(session('cart'));
        });
            session()->forget('cart');
            session()->forget('cart_qty');
            session()->forget('cart_total');
            return redirect()->route('cart.checkout')->with('success', ' Заказ оформлен!');

        }


       /* dd(auth()->id()); // работает*/
      /*  dd(Auth::id()); // работает*/

       return view('cart.checkout');

    }

}
