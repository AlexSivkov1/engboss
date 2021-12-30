
<title><?php echo $__env->yieldContent('title', 'Cart Checkout'); ?></title>
<div class="container col-lg-12">
<?php $__env->startSection('content'); ?>
<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="blog">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Оформление Заказа</h1>

                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">

                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


<?php if(!empty(session('cart'))): ?>
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

            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <a href="<?php echo e(route('products.single', ['slug' => $item['slug']])); ?>">
                            <img style="width: 150px; height: 120px" src="<?php echo e($item['img']); ?>" alt="<?php echo e($item['title']); ?>">
                        </a>
                    </td>
                    <td><a href="<?php echo e(route('products.single', ['slug' => $item['slug']])); ?>"><?php echo e($item['title']); ?></a></td>
                    <td><?php echo e($item['price']); ?></td>
                    <td><?php echo e($item['qty']); ?></td>
                    <td><span class="text-danger del-item" data-action="<?php echo e(route('cart.del_item', ['product_id' => $item['product_id'] ])); ?>"><i class="ti-unlink"></i></span></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="4" align="right">Итого: </td>
                <td id="modal-cart-qty" colspan="4" align="right"> <?php echo e(session('cart_qty')); ?></td>
            </tr>
            <tr>
                <td colspan="4" align="right"> На сумму:</td>
                <td id="modal-cart-total"   align="right"> <?php echo e(session('cart_total')); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h4>Корзина пуста</h4>
<?php endif; ?>


<form method="post" action="<?php echo e(route('cart.checkout')); ?>">
    <?php echo csrf_field(); ?>
<div class="card-body">
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" class="form-control" required id="name" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?>">
        <input name="user_id" type="hidden" value="<?php echo e(\Illuminate\Support\Facades\Auth::id()); ?>">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email"  class="form-control" required id="email" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->email); ?>">
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
    <?php $__env->stopSection(); ?>
</div>







<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\engboss\resources\views/cart/checkout.blade.php ENDPATH**/ ?>