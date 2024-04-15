<body>
    <h1>Form Tambah Data User</h1>
    <form action="/user/tambah_simpan" method="post">
        <?php echo csrf_field(); ?>
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <label>Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level Pengguna">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
<?php /**PATH D:\laragon\www\PWL2024\PWL_POS\resources\views/user_tambah.blade.php ENDPATH**/ ?>