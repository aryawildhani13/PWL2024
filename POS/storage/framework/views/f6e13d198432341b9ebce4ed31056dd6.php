<!-- beauty_health.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Kecantikan dan Kesehatan</title>
</head>
<body>
    <h1>Daftar Produk Kecantikan dan Kesehatan</h1>
    <ul>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($product->name); ?> - <?php echo e($product->price); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH D:\laragon\www\PWL2024\POS\resources\views/products/beauty_health.blade.php ENDPATH**/ ?>