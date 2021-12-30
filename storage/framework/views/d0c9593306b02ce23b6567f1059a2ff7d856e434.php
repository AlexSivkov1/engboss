<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'EngBoss'); ?></title>
    <link rel="icon" href="<?php echo e(asset('assets/front/img/Fevicon.png')); ?>" type="image/png">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendors/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendors/fontawesome/css/all.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendors/themify-icons/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendors/nice-select/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendors/owl-carousel/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendors/owl-carousel/owl.carousel.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/style.css')); ?>">
</head>
<body>

<!--================ Start Header Menu Area =================-->
<header class="header_area">

    <div class="main_menu">
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/front/img/logo.png')); ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">

                                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('categories')); ?>">Shop Category</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('products')); ?>">Product Checkout</a></li>
                                <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('cart.show')); ?>">Shopping Cart</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Categories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Extra</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('test')); ?>">Test English</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register.create')); ?>">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('logout')); ?>" >Logout</a></li>
                                <li class="nav-item"><a class="nav-link" href="tracking-order.html" >Tracking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>

                    <ul class="nav-shop">
                        <li class="nav-item"><button><i class="ti-search"></i></button></li>

                        <li class="nav-item">
                            <button onclick="getCart('<?php echo e(route('cart.show')); ?>')"><i class="ti-shopping-cart"></i>
                                <span class="nav-shop__circle mini-cart-qty"><?php echo e(session('cart_qty') ?? 0); ?></span>
                            </button>
                        </li>
                        <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->



<div class="container-fluid">

    <?php echo $__env->yieldContent('content'); ?>

</div>


<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                <a href="<?php echo e(route('cart.checkout')); ?>" class="btn btn-primary btn-cart <?php if(empty(session('cart'))): ?> d-none <?php endif; ?>">Оформить заказ</a>

                <button type="button" onclick="clearCart('<?php echo e(route('cart.clear')); ?>')" class="btn btn-danger btn-cart <?php if(empty(session('cart'))): ?> d-none <?php endif; ?>">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>


<!--================ Start footer Area  =================-->
<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title large_title">Our Mission</h4>
                        <p>
                            So seed seed green that winged cattle in. Gathering thing made fly you're no
                            divided deep moved us lan Gathering thing us land years living.
                        </p>
                        <p>
                            So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Quick Links</h4>
                        <ul class="list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h4 class="footer_title">Gallery</h4>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="<?php echo e(asset('assets/front/img/gallery/r1.jpg')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('assets/front/img/gallery/r2.jpg')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('assets/front/img/gallery/r3.jpg')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('assets/front/img/gallery/r5.jpg')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('assets/front/img/gallery/r7.jpg')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('assets/front/img/gallery/r8.jpg')); ?>" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                Head Office
                            </p>
                            <p>123, Main Street, Your City</p>

                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Phone Number
                            </p>
                            <p>
                                +123 456 7890 <br>
                                +123 456 7890
                            </p>

                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Email
                            </p>
                            <p>
                                free@infoexample.com <br>
                                www.infoexample.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->



<script src="<?php echo e(asset('assets/front/vendors/jquery/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/vendors/bootstrap/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/front/vendors/skrollr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/vendors/owl-carousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/vendors/nice-select/jquery.nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/vendors/jquery.ajaxchimp.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH D:\OSPanel\domains\engboss\resources\views/layouts/layout.blade.php ENDPATH**/ ?>