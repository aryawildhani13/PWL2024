<?php $__env->startSection('title', 'Edit Level'); ?>
<?php $__env->startSection('content_header'); ?>
    <h1>Edit Level</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Level
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('level.update', [$level->level_id])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="form-group">
                                <label for="level_kode">Level Kode</label>
                                <input type="text" name="level_kode" id="level_kode" class="form-control" value="<?php echo e($level->level_kode); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="level_nama">Level Nama</label>
                                <input type="text" name="level_nama" id="level_nama" class="form-control" value="<?php echo e($level->level_nama); ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\PWL2024\PWL_POS\resources\views/level/edit.blade.php ENDPATH**/ ?>