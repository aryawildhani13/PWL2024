<html>
    <h1> Daftar Dosen</h1>
    <ol>
        <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $namaDosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($namaDosen); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</html>
<?php /**PATH D:\laragon\www\belajar_laravel\PWL2024\resources\views/politeknik/dosen.blade.php ENDPATH**/ ?>