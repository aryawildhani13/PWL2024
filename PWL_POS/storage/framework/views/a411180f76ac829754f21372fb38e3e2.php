<div class="d-flex gap-2 align-items-center">
    <a href="<?php echo e(url('kategori/edit', $kategori_id)); ?>" class="btn btn-sm btn-primary">Edit</a>

    <form action="<?php echo e(url('kategori/delete', [$kategori_id])); ?>" method="post" class="d-flex align-items-center m-0">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-sm btn-danger ml-2">Delete</button>
    </form>
</div>
<?php /**PATH D:\laragon\www\PWL2024\PWL_POS\resources\views/kategori/action.blade.php ENDPATH**/ ?>