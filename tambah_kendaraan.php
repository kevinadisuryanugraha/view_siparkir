<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link href="assets/CSS/edit_jenis_kendaraan.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/CSS/style.css">

<div class="main-content">
    <header>
        <h2>Tambah <span>Jenis kendaraan</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    

    <!-- ruang kreasi developer -->
    <div class="container">
        <h1>Tambah Jenis Kendaraan</h1>
        <form action="proses_tambah_jenis_kendaraan.php" method="POST">
            <div class="form-group">
                <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" required>
            </div>
            <div class="form-group">
                <label for="biaya">Biaya/jam:</label>
                <input type="text" id="biaya" name="biaya" required>
            </div>
            <button type="submit" class="btn-submit">Simpan</button>
            <button type="button" class="btn-cancel" onclick="window.location.href='jenis_kendaraan.php'">Batal</button>
        </form>
    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>
  
</body>

</html>
