@extends('layouts.layout')

@section('title', 'EngBoss - Home')

@section('content')

<section class="hero-banner">
    <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
            <div class="col-5 d-none d-sm-block">
                <div class="hero-banner__img">
                    <img class="img-fluid" src="{{asset('assets/front/img/home/hero-banner.png')}}" alt="">
                </div>
            </div>
            <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                <div class="hero-banner__content">
                    <h4>Shop is fun</h4>
                    <h1>Browse Our Premium Product</h1>
                    <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass.</p>
                    <a class="button button-hero" href="#">Browse Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


{{--@if (Rout::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
    </div>
@endif--}}
<!--================ Hero banner start =================-->
<div class="col-md-12"> @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<!--================ Hero Carousel start =================-->
<section class="section-margin mt-0">
    <div class="owl-carousel owl-theme hero-carousel">

        @foreach($categories as $category)
            <div class="hero-carousel__slide">
                <img style="height:457px" src="{{$category->getImage()}}" alt="" class="img-fluid">
                <a href="{{route('categories.single',['slug' =>$category->slug])}}" class="hero-carousel__slideOverlay">
                    <h3>{{$category->title}}</h3>
                    <p>Category Name</p>
                </a>
            </div>
        @endforeach

    </div>
</section>
<!--================ Hero Carousel end =================-->

<!-- ================ trending product section start ================= -->
<section class="section-margin calc-60px">
    <div class="container">
        <div class="section-intro pb-60px">
            <p>Popular Item in the market</p>
            <h2>Trending <span class="section-intro__style">Product</span></h2>
        </div>
        <div class="row">

            @foreach($products as $product)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card text-center card-product">
                    <div class="card-product__img">
                        <img class="card-img" style="height: 220px; width: 255px;" src="{{ $product->getImage() }}" alt="">
                        <form  action="{{ route('cart.add') }}" method="post" class="addtocart">
                            @csrf
                        <ul class="input-group" style="border-radius: 10px;">
                            {{--<li><button><i class="ti-search"></i></button></li>--}}

                            <li class="input-group-append" >
                                <button style="background:darkblue;" onclick="getCart('{{route('cart.show')}}')"><i style="color: white;" class="ti-shopping-cart"></i>
                                </button>
                            </li>
                            <input style="border: solid 2px darkblue;" type="text" class="form-control" name="qty" value="1">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                           {{-- <button class="btn btn-info btn-block cart-addtocart" type="submit">
                                <i class="fas fa-cart-arrow-down"></i>Купить
                            </button>--}}



                          {{--  <button onclick="getCart('{{route('cart.show')}}')"><i class="ti-shopping-cart"></i>
                                <span class="nav-shop__circle mini-cart-qty">{{session('cart_qty') ?? 0}}</span>
                            </button>--}}


                      {{--      <form action="{{ route('cart.add') }}" method="post" class="addtocart">
                                @csrf
                                <div class="input-group">
                                    <input  type="text" class="form-control" name="qty" value="1">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-info btn-block cart-addtocart" type="submit">
                                            <i class="fas fa-cart-arrow-down"></i>Купить
                                        </button>
                                    </div>
                                </div>
                            </form>--}}
                        </ul>
                        </form>
                    </div>
                    <div class="card-body">
                        <p><a href="{{route('categories.single',['slug' =>$product->category->slug])}}">{{$product->category->title}}</a></p>


                        <h4 class="card-product__title"><a href="{{route('products.single',['slug' =>$product->slug])}}">{{$product->title}}</a>
                        </h4>
                        <p class="card-product__price">{{$product->price}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ================ trending product section end ================= -->


<!-- ================ offer section start ================= -->
<section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="offer__content text-center">
                    <h3>Up To 50% Off</h3>
                    <h4>Winter Sale</h4>
                    <p>Him she'd let them sixth saw light</p>
                    <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ offer section end ================= -->

<!-- ================ Best Selling item  carousel ================= -->
<section class="section-margin calc-60px">

        <div class="container">
            <div class="section-intro pb-60px">
                <p>Popular Items in the market</p>
                <h2>Best <span class="section-intro__style">Sellers</span></h2>
            </div>
            <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                @foreach($high_st_products as $high_st_product)
                <div class="card text-center card-product">
                    <div class="card-product__img">
                        <img class="img-fluid" src="{{$high_st_product->getImage()}}" alt="">


                        <form  action="{{ route('cart.add') }}" method="post" class="addtocart">
                            @csrf
                            <ul class="input-group" style="border-radius: 10px;">
                                {{--<li><button><i class="ti-search"></i></button></li>--}}

                                <li class="input-group-append" >
                                    <button style="background:darkblue;" onclick="getCart('{{route('cart.show')}}')"><i style="color: white;" class="ti-shopping-cart"></i>
                                    </button>
                                </li>
                                <input style="border: solid 2px darkblue;" type="text" class="form-control" name="qty" value="1">
                                <input type="hidden" name="product_id" value="{{ $high_st_product->id }}">
                            </ul>
                        </form>


                    </div>
                    <div class="card-body">

                        <h4 class="card-product__title"><a href="{{route('products.single',['slug' =>$high_st_product->slug])}}">{{$high_st_product->title}}>{{$high_st_product->title}}</a></h4>
                        <p class="card-product__price">{{$high_st_product->price}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
<!-- ================ Best Selling item  carousel end ================= -->

<!-- ================ Blog section start ================= -->
<section class="blog">
    <div class="container">
        <div class="section-intro pb-60px">
            <p>Popular Item in the market</p>
            <h2>Latest <span class="section-intro__style">News</span></h2>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card card-blog">
                    <div class="card-blog__img">
                        <img class="card-img rounded-0" src="{{asset('assets/front/img/blog/blog1.png')}}" alt="">
                    </div>
                    <div class="card-body">
                        <ul class="card-blog__info">
                            <li><a href="#">By Admin</a></li>
                            <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                        </ul>
                        <h4 class="card-blog__title"><a href="single-blog.html">The Richland Center Shooping News and weekly shooper</a></h4>
                        <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                        <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card card-blog">
                    <div class="card-blog__img">
                        <img class="card-img rounded-0" src="{{asset('assets/front/img/blog/blog2.png')}}" alt="">
                    </div>
                    <div class="card-body">
                        <ul class="card-blog__info">
                            <li><a href="#">By Admin</a></li>
                            <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                        </ul>
                        <h4 class="card-blog__title"><a href="single-blog.html">The Shopping News also offers top-quality printing services</a></h4>
                        <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                        <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card card-blog">
                    <div class="card-blog__img">
                        <img class="card-img rounded-0" src="{{asset('assets/front/img/blog/blog3.png')}}" alt="">
                    </div>
                    <div class="card-body">
                        <ul class="card-blog__info">
                            <li><a href="#">By Admin</a></li>
                            <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                        </ul>
                        <h4 class="card-blog__title"><a href="single-blog.html">Professional design staff and efficient equipment you’ll find we offer</a></h4>
                        <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                        <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Blog section end ================= -->

<!-- ================ Subscribe section start ================= -->
<section class="subscribe-position">
    <div class="container">
        <div class="subscribe text-center">
            <h3 class="subscribe__title">Get Update From Anywhere</h3>
            <p>Bearing Void gathering light light his eavening unto dont afraid</p>
            <div id="mc_embed_signup">
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
                    <div class="form-group ml-sm-auto">
                        <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
                        <div class="info"></div>
                    </div>
                    <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                    <div style="position: absolute; left: -5000px;">
                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

 @endsection

