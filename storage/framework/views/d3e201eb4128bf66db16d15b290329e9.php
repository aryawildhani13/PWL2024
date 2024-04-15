<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row" style="gap: 25px">
            <div class="col-4 shadow p-5">
                <h2>Grafik User</h2>
                <canvas id="user-chart"></canvas>
            </div>
            <div class="col-7 shadow p-5">
                <h2>Grafik Stok</h2>
                <canvas id="stok-chart"></canvas>
            </div>
        </div>
        <div class="row" style="margin-top: 25px;">
            <div class="col shadow p-5">
                <h2>Grafik Penjualan</h2>
                <canvas id="penjualan-chart"></canvas>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        $.get("<?php echo e(url('chart-user')); ?>").then((data) => {
            const ctx = document.getElementById('user-chart');
            const labels = ['SuperAdmin', 'Manager', 'Staff/Kasir'];
            const total = data.map((d) => d.total);
            let chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels,
                    datasets: [{
                        label: '# of Users',
                        data: total,
                    }]
                }
            })
        })

        $.get("<?php echo e(url('chart-stok')); ?>").then((data) => {

            const labels = data.map((d) => d.barang_nama);
            const total = data.map((d) => d.total);

            const ctx = document.getElementById('stok-chart');
            let chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels,
                    datasets: [{
                        label: '# of Products',
                        data: total,
                    }]
                }
            })
        })

        $.get("<?php echo e(url('chart-penjualan')); ?>").then((data) => {

            const labels = data.map((d) => d.date);
            const total = data.map((d) => d.total);

            const ctx = document.getElementById('penjualan-chart');
            let chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels,
                    datasets: [{
                        label: '# of Penjualan',
                        data: total,
                    }]
                }
            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\PWL2024\PWL_POS_Upgrade\resources\views/home.blade.php ENDPATH**/ ?>