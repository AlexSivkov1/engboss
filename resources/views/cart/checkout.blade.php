@extends('layouts.layout')
<title>@yield('title', 'Cart Checkout')</title>
<div class="container col-lg-12">
@section('content')
<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="blog">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Оформление Заказа</h1>

                @if (session()->has('success'))
                    <div class="alert alert-success">

                        {{session('success')  }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


@if(!empty(session('cart')))
    <div class="table-responsive cart-table" id="table table-responsive_for_cart">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Цена</th>
                <th>Кол-во</th>
                <th><i class="ti-unlink"></i></th>
            </tr>
            </thead>
            <tbody>

            @foreach(session('cart') as $item)
                <tr>
                    <td>
                        <a href="{{ route('products.single', ['slug' => $item['slug']]) }}">
                            <img style="width: 150px; height: 120px" src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                        </a>
                    </td>
                    <td><a href="{{ route('products.single', ['slug' => $item['slug']]) }}">{{ $item['title'] }}</a></td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td><span class="text-danger del-item" data-action="{{route('cart.del_item', ['product_id' => $item['product_id'] ])}}"><i class="ti-unlink"></i></span></td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4" align="right">Итого: </td>
                <td id="modal-cart-qty" colspan="4" align="right"> {{ session('cart_qty') }}</td>
            </tr>
            <tr>
                <td colspan="4" align="right"> На сумму:</td>
                <td id="modal-cart-total"   align="right"> {{ session('cart_total') }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@else
    <h4>Корзина пуста</h4>
@endif


<form method="post" action="{{route('cart.checkout')}}">
    @csrf
<div class="card-body">
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" class="form-control" required id="name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}">
        <input name="user_id" type="hidden" value="{{ \Illuminate\Support\Facades\Auth::id() }}">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email"  class="form-control" required id="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}">
    </div>

    <div class="form-group">
        <label for="phone">phone</label>
        <input type="text" name="phone" class="form-control" required id="phone">
    </div>

    <div class="form-group">
        <label for="address">address</label>
        <input type="text" name="address" class="form-control" required id="address">
    </div>

    <div class="form-group">
        <label for="note">note</label>
        <input type="text" name="note" class="form-control" id="note">
    </div>


    </div>

<button style="margin-left:10px;" type="submit" class="btn btn-primary">Купить</button>


</form>
    @endsection
</div>






