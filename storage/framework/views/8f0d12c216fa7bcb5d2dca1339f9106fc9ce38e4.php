<?php if(!empty(session('cart'))): ?>
    <div class="table-responsive" id="table table-responsive_for_cart">
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
<?php /**PATH D:\OSPanel\domains\engboss\resources\views/cart/cart-modal.blade.php ENDPATH**/ ?>