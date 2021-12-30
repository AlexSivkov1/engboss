
<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Заказы</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Список заказов</h3>
            </div>
            <div class="card-body p-1">
                <a href="<?php echo e(route('orders.create')); ?>" class="btn btn-primary mb-3">Добавить заказ</a>
                <?php if(count($orders)): ?>
                    <h4>Всего заказов <?php echo e(count($orders)); ?></h4>

                   

                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                <tr>
                                    <th>ID заказа</th>
                                    <th>Id заказчика</th>
                                    <th>Продукты</th>
                                    <th>Тел</th>
                                    <th>email</th>
                                    <th>address</th>
                                    <th>status</th>
                                    <th>созд</th>
                                    <th>изм</th>
                                    <th>slug</th>
                                    <th>actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                            <th scope="row"><?php echo e($order->id); ?></th>
                                        <td><?php echo e($order->user_id); ?></td>
                                        <td><?php echo e($order->products->pluck('id')->join(', ')); ?></td>
                                        <td><?php echo e($order->phone); ?></td>
                                        <td><?php echo e($order->email); ?></td>
                                        <td><?php echo e($order->address); ?></td>
                                        <td><?php echo e($order->status); ?></td>
                                        <td><?php echo e($order->created_at); ?></td>
                                        <td><?php echo e($order->updated_at); ?></td>
                                        <td><?php echo e($order->slug); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('orders.edit', $order->id)); ?>" class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <form action="<?php echo e(route('orders.destroy', $order->id)); ?>" method="post" class="float-left">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <th># Покупок </th>



                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                <?php else: ?>
                    <p>Заказов пока нет</p>
                <?php endif; ?>

            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <?php echo e($orders->links()); ?>

            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\engboss\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>