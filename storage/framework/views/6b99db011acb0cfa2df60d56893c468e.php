<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?php echo e(asset('adminlte/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php echo e(auth()->user()->nama); ?></a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?php echo e(url('/')); ?>" class="nav-link <?php echo e($activeMenu == 'dashboard' ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">Data Pengguna</li>
            
            <li class="nav-item">
                <a href="<?php echo e(url('/level')); ?>" class="nav-link <?php echo e($activeMenu == 'level' ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>Level User</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('/user')); ?>" class="nav-link <?php echo e($activeMenu == 'user' ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Data User</p>
                </a>
            </li>
            <li class="nav-header">Data Barang</li>
            
            <li class="nav-item">
                <a href="<?php echo e(url('/kategori')); ?>" class="nav-link <?php echo e($activeMenu == 'kategori' ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-bookmark"></i>
                    <p>Kategori Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('/barang')); ?>" class="nav-link <?php echo e($activeMenu == 'barang' ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>Data Barang</p>
                </a>
            </li>
            <li class="nav-header">Data Transaksi</li>
            
            <li class="nav-item">
                <a href="<?php echo e(url('/stok')); ?>" class="nav-link <?php echo e($activeMenu == 'stok' ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>Stok Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('/penjualan')); ?>" class="nav-link <?php echo e($activeMenu == 'transaksi' ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>Transaksi Penjualan</p>
                </a>
            </li>

            <li class="nav-header">Settings</li>
            <li class="nav-item">
                <form action=<?php echo e(url('logout')); ?> method="post" class="bg-transparent">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-block btn-transparent" style="color: #c2c7d0; text-align: start; padding: 8px 16px">
                        <i class="nav-icon fas fa-door-open"></i>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</div>
<?php /**PATH D:\laragon\www\PWL2024\PWL_POS_Upgrade\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>