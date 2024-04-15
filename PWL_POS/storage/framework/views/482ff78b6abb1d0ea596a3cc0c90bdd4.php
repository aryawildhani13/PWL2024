<?php $__env->startSection('title', 'Form Ubah Data User'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Form Ubah Data User</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <a href="/user" class="btn btn-primary">Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="/user/<?php echo e($data->user_id); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" value="<?php echo e($data->username); ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" value="<?php echo e($data->nama); ?>">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" value="<?php echo e($data->password); ?>">
                </div>

                <div class="form-group">
                    <label for="level_id">Level ID</label>
                    <input type="text" name="level_id" id="level_id" class="form-control" placeholder="Masukkan ID Level Pengguna" value="<?php echo e($data->level_id); ?>">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Ubah">
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/dist/css/adminlte.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('vendor/adminlte/dist/js/adminlte.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\PWL2024\PWL_POS\resources\views/user/edit.blade.php ENDPATH**/ ?>