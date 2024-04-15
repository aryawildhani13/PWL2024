<html>
    <h1> Daftar Dosen</h1>
    <ol>
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $namaMahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($namaMahasiswa); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</html>
<?php /**PATH D:\laragon\www\belajar_laravel\PWL2024\resources\views/politeknik/mahasiswa.blade.php ENDPATH**/ ?>