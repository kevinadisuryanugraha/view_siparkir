<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php
add_kendaraan();
?>
<link href="assets/CSS/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/CSS/tambah_jenis_kendaraan.css">
<div class="main-content">
    <header>
        <h2>Tambah Jenis Kendaraan<span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <!-- ruang kreasi developer -->
    <div class="container">
        <h1>Tambah Jenis Kendaraan</h1>
        <form action="tambah_kendaraan.php" method="POST" class="pure-form pure-form-stacked">
            <div class="input-group">
                <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-car-side"></i>
                    <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" class="pure-input-1" required autofocus>
                </div>
            </div>
            <div class="input-group">
                <label for="biaya_jam">Biaya/Jam:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    <input type="number" id="biaya_jam" name="biaya_jam" class="pure-input-1" required>
                </div>
            </div>
            <button type="submit" class="btn-submit">Simpan</button>
            <button type="button" class="btn-cancel" onclick="window.location.href='jenis_kendaraan.php'">Batal</button>
        </form>
    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>