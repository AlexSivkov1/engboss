<?php

namespace App\Http\Controllers\Admin;
use App\Order;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|\Illuminate\View\View
     */
    public function index()
    {

//        $users_id = session();


//$user_id = Auth::user()->id;

        $order_user = Order::with('user')->paginate(3);
        $orders = $order_user;


        return view('admin.orders.index', compact('orders'));
    }

    public function show()
    {
     $products = Product::with('orders');

        return view('admin.orders.show', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $products = Product::pluck('title', 'id')->all();
        $categories = Category::pluck('title', 'id')->all();

        $orders = Order::with('user');

//        $order->products()->sync($request->products_id);



        return view('admin.orders.create', compact( 'products','categories', 'orders'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // только то что есть в таблице Order
        $request->validate([

            'title' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'status' => 'required',
           /* 'user_id' => 'required|integer',*/



        ]);

//dd($request->all());

//        $user_id[] = (Auth::user()->id);
        $order = Order::create($request->all());

        $order->products()->sync($request->products_id);


        $request->session()->flash('success', 'Заказ добавлен');
        return redirect()->route('orders.index');
    }




    public function edit($id)
    {
        $order = Order::find($id);
        $products = Product::pluck('title', 'id')->all();
        return view('admin.orders.edit', compact('order', 'products'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);
        $order = Order::find($id);
        $order->products()->sync($request->products_id);
        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Изменения сохранены');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        // или Category::destroy($id);

        return redirect()->route('orders.index')->with('success', 'Заказ удален');

    }
}
