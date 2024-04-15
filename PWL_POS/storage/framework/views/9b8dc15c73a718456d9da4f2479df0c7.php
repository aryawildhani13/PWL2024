<div class="d-flex column-gap-2 align-items-center">
    <a href="<?php echo e(route('user.edit', [$user_id])); ?>" class="btn btn-sm btn-primary">Edit</a>

    <form action="<?php echo e(route('user.destroy', [$user_id])); ?>" method="post" class="d-flex align-items-center m-0">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-sm btn-danger">Delete</button>
    </form>
</div>
<?php /**PATH D:\laragon\www\PWL2024\PWL_POS\resources\views/user/action.blade.php ENDPATH**/ ?>