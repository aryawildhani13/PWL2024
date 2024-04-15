<?php $__env->startSection('content'); ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo e($page->title); ?></h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <?php if(empty($level)): ?>
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
            <?php else: ?>
                <table class="table table-bordered table-striped table-hover tablesm">
                    <tr>
                        <th>ID</th>
                        <td><?php echo e($level->level_id); ?></td>
                    </tr>
                    <tr>
                        <th>Level Kode</th>
                        <td><?php echo e($level->level_kode); ?></td>
                    </tr>
                    <tr>
                        <th>Level Nama</th>
                        <td><?php echo e($level->level_nama); ?></td>
                    </tr>
                </table>
            <?php endif; ?>
            <a href="<?php echo e(url('level')); ?>" class="btn btn-sm btn-default mt2">Kembali</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\PWL2024\PWL_POS_Upgrade\resources\views/level/show.blade.php ENDPATH**/ ?>