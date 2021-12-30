<?php

namespace App\Http\Controllers\Admin;
use App\Order;
use App\orderProduct;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){


// чтобы вызвать эту связь должно быть например:
       /* $products = Product::with('category', 'status')->orderBy('id', 'desc')->paginate(10);
//там в модели Product или в таблице есть (записано category_id  и status_id)

        return view('product.index', compact('products'));*/
//        $users = Order::with('users')->paginate(12);


        $users = Order::with('user');
       /* $user = User::all();
         $users = Order::query()->with('users' )->firstOrFail();*/

       /* $product = Product::query()->with('category','status', 'brand' )->where('slug', $slug)->firstOrFail();*/

      /*  dd($user->all());
        dd($users->orders()->all());*/





        return view('admin.users.index', compact('users'  ));
    }



    public function edit($id){

        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }


    public function destroy($id){

        $user = User::find($id);

        return view('admin.users.index', compact('user'));
    }
}


