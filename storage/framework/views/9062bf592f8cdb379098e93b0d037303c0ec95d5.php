

<?php $__env->startSection('content'); ?>


        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Бренды</h1>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список брендов</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="<?php echo e(route('brands.create')); ?>" class="btn btn-primary mb-3">Добавить
                                    бренд</a>
                                <?php if(count($brands)): ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Наименование</th>
                                                <th>Slug</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($brand->id); ?></td>
                                                    <td><?php echo e($brand->title); ?></td>
                                                    <td><?php echo e($brand->slug); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('brands.edit', ['brand' => $brand->id])); ?>"
                                                           class="btn btn-info btn-sm float-left mr-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>

                                                        <form action="<?php echo e(route('brands.destroy', ['brand' => $brand->id])); ?>"
                                                                method="post" class="float-left">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"> <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php else: ?>
                                    <p>Брендов пока нет...</p>
                                <?php endif; ?>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <?php echo e($brands->links()); ?>

                                
                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\engboss\resources\views/admin/brands/index.blade.php ENDPATH**/ ?>