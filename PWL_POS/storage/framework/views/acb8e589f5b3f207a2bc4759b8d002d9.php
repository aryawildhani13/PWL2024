<?php $__env->startSection('subtitle', 'Kategori'); ?>
<?php $__env->startSection('content_header_title', 'Kategori'); ?>
<?php $__env->startSection('content_header_subtitle', 'Edit Kategori'); ?>

<?php $__env->startSection('content_body'); ?>
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Kategori</h3>
            </div>
            <form action="<?php echo e(url('kategori/update', [$data->kategori_id])); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori"
                            placeholder="Kode Kategori" value="<?php echo e($data->kategori_kode); ?>">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori"
                            placeholder="Nama Kategori" value="<?php echo e($data->kategori_nama); ?>">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\PWL2024\PWL_POS\resources\views/kategori/edit.blade.php ENDPATH**/ ?>