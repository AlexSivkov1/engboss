@extends('layouts.layout')

<title>@yield('title', 'Products Checkouts')</title>


<div class="container-fluid">
    @section('content')
        <p style="margin-left: 200px;">Selected By the Category</p>
        <div class="row">

            @forelse($products as $product)
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card card-blog">
                        <div class="card-blog__img align-self-center">
                            <a href="{{route('products.single', ['slug'=>$product->slug])}}"><img class="img-fluid"
                                                                                                  style="width: 340px;height: 280px"
                                                                                                  src="{{$product->getImage()}}"
                                                                                                  alt=""></a>

                            <form action="{{ route('cart.add') }}" method="post" class="addtocart">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" name="qty" value="1">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-info btn-block cart-addtocart" type="submit">
                                            <i class="fas fa-cart-arrow-down"></i> Купить
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="card-body align-self-center">


                            @if($product->hit)
                                <p style="line-height:0.5px " class="">Hit</p>
                            @endif
                            @if($product->sale)
                                <p style="line-height:0.5px " class=""></p><img
                                        style="width: 30px; height: 25px; margin: 0 auto"
                                        src="{{asset('assets/front/img/sale.png')}}" alt="">
                            @endif
                            <p style="line-height:0.5px ">{{$product->category->title}}</p>
                            <h6 style="line-height:0.5px " class="card-product__title">
                                <a href="{{route('products.single', ['slug'=>$product->slug])}}">{{$product->title}}</a>
                            </h6>
                            <span>
                                  @if($product->old_price)
                                    <del>  {{ $product->old_price }} руб. </del>

                                @endif
                                {{$product->price}}
                                </span>

                            <div class="item-status"><i class="{{ $product->status->icon }}"
                                                        style="color: #00e765"></i> {{ $product->status->title }}</div>

                        </div>
                    </div>
                </div>
            @empty
                <p> Продуктов еще пока нет в данной категории...</p>
            @endforelse


        </div>
        <!-- ================ Best Selling item  carousel end ================= -->

        <div class="col-md-12" style="margin-left: 100px; margin-bottom: 50px;">
            <nav aria-label="Page navigation example">
                {{ $products->links() }}
            </nav>
        </div>

    @endsection
</div>