@extends('layouts.layout')

<title>@yield('title', 'Categories')</title>

@section('content')
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Shop Category</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
                        @foreach($categories as $category)
                            <li class="breadcrumb-item active" aria-current="page">{{$category->title}}</li>
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>



<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <ul class="main-categories">
                    <li class="common-filter">
                        <form action="#">
                            @foreach($categories as $category)
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="men" name="category">
                                    <label for="men">{{$category->title}} </label>
                                </li>
                                {{--<li class="filter-list"><input class="pixel-radio" type="radio" id="women" name="brand"><label for="women">Women<span> (3600)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="accessories" name="brand"><label for="accessories">Accessories<span> (3600)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="footwear" name="brand"><label for="footwear">Footwear<span> (3600)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="bayItem" name="brand"><label for="bayItem">Bay item<span> (3600)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="electronics" name="brand"><label for="electronics">Electronics<span> (3600)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="food" name="brand"><label for="food">Food<span> (3600)</span></label></li>--}}
                            </ul>
                                @endforeach
                        </form>
                    </li>
                </ul>
            </div>
            <div class="sidebar-filter">
                <div class="top-filter-head">Product Filters</div>
                <div class="common-filter">
                    <div class="head">Brands</div>
                    <form action="#">
                        <ul>
                            @foreach($brands as $brand)
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">{{$brand->title}} </label></li>
                             @endforeach
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Color</div>
                    <form action="#">
                        <ul>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
                                    Leather<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
                                    with red<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Price</div>
                    <div class="price-range-area">
                        <div id="price-range"></div>
                        <div class="value-wrapper d-flex">
                            <div class="price">Price:</div>
                            <span>$</span>
                            <div id="lower-value"></div>
                            <div class="to">to</div>
                            <span>$</span>
                            <div id="upper-value"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div>
                    <div class="input-group filter-bar-search">
                        <input type="text" placeholder="Search">
                        <div class="input-group-append">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->

            <div class="row">

                            @foreach($categories as $category)
                <div class="col-md-6 col-lg-4">
                    <div class="card text-center card-product">
                        <div class="card-product__img">

                            <a href="{{route('categories.single',['slug' =>$category->slug])}}"><img class="card-img" src="{{$category->getImage()}}" alt="{{$category->title}}"></a>

                        </div>
                        <div class="card-body">
                            <p>{{$category->title}}</p>


                        </div>
                    </div>
                </div>
                            @endforeach


            </div>




            <!-- End Best Seller -->
        </div>
    </div>
</div>
@endsection