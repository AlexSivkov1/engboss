

<title><?php echo $__env->yieldContent('title', 'Categories'); ?></title>

<?php $__env->startSection('content'); ?>
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Shop Category</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e($category->title); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="men" name="category">
                                    <label for="men"><?php echo e($category->title); ?> </label>
                                </li>
                                
                            </ul>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple"><?php echo e($brand->title); ?> </label></li>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-center card-product">
                        <div class="card-product__img">

                            <a href="<?php echo e(route('categories.single',['slug' =>$category->slug])); ?>"><img class="card-img" src="<?php echo e($category->getImage()); ?>" alt="<?php echo e($category->title); ?>"></a>

                        </div>
                        <div class="card-body">
                            <p><?php echo e($category->title); ?></p>


                        </div>
                    </div>
                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>




            <!-- End Best Seller -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\engboss\resources\views/category/index.blade.php ENDPATH**/ ?>