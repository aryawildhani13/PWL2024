<?php $__env->startSection('content'); ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo e($page->title); ?></h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="<?php echo e(url('kategori')); ?>" class="form-horizontal">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Level Kode</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="kategori_kode" name="kategori_kode"
                            value="<?php echo e(old('kategori_kode')); ?>" required>
                        <?php $__errorArgs = ['kategori_kode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Level Nama</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="kategori_nama" name="kategori_nama"
                            value="<?php echo e(old('kategori_nama')); ?>" required>
                        <?php $__errorArgs = ['kategori_nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label"></label>
                    <div class="col-11">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a class="btn btn-sm btn-default ml-1" href="<?php echo e(url('kategori')); ?>">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\PWL2024\PWL_POS_Upgrade\resources\views/kategori/create.blade.php ENDPATH**/ ?>