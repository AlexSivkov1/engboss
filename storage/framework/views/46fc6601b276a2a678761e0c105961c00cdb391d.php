

<title><?php echo $__env->yieldContent('title', 'Products Checkouts'); ?></title>


<div class="container-fluid">
    <?php $__env->startSection('content'); ?>
        <p style="margin-left: 200px;">Selected By the Category</p>
        <div class="row">

            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card card-blog">
                        <div class="card-blog__img align-self-center">
                            <a href="<?php echo e(route('products.single', ['slug'=>$product->slug])); ?>"><img class="img-fluid"
                                                                                                  style="width: 340px;height: 280px"
                                                                                                  src="<?php echo e($product->getImage()); ?>"
                                                                                                  alt=""></a>

                            <form action="<?php echo e(route('cart.add')); ?>" method="post" class="addtocart">
                                <?php echo csrf_field(); ?>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="qty" value="1">
                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-info btn-block cart-addtocart" type="submit">
                                            <i class="fas fa-cart-arrow-down"></i> Купить
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="card-body align-self-center">


                            <?php if($product->hit): ?>
                                <p style="line-height:0.5px " class="">Hit</p>
                            <?php endif; ?>
                            <?php if($product->sale): ?>
                                <p style="line-height:0.5px " class=""></p><img
                                        style="width: 30px; height: 25px; margin: 0 auto"
                                        src="<?php echo e(asset('assets/front/img/sale.png')); ?>" alt="">
                            <?php endif; ?>
                            <p style="line-height:0.5px "><?php echo e($product->category->title); ?></p>
                            <h6 style="line-height:0.5px " class="card-product__title">
                                <a href="<?php echo e(route('products.single', ['slug'=>$product->slug])); ?>"><?php echo e($product->title); ?></a>
                            </h6>
                            <span>
                                  <?php if($product->old_price): ?>
                                    <del>  <?php echo e($product->old_price); ?> руб. </del>

                                <?php endif; ?>
                                <?php echo e($product->price); ?>

                                </span>

                            <div class="item-status"><i class="<?php echo e($product->status->icon); ?>"
                                                        style="color: #00e765"></i> <?php echo e($product->status->title); ?></div>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p> Продуктов еще пока нет в данной категории...</p>
            <?php endif; ?>


        </div>
        <!-- ================ Best Selling item  carousel end ================= -->

        <div class="col-md-12" style="margin-left: 100px; margin-bottom: 50px;">
            <nav aria-label="Page navigation example">
                <?php echo e($products->links()); ?>

            </nav>
        </div>

    <?php $__env->stopSection(); ?>
</div>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\engboss\resources\views/category/show.blade.php ENDPATH**/ ?>