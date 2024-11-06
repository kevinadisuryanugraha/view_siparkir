<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="assets/CSS/tambah_kendaraan_masuk.css">
<link rel="stylesheet" href="assets/CSS/style.css" type="text/css">

<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <div class="container">
        <header>
            <h2>Tambah Kendaraan Keluar</h2>
            <a href="kendaraan_masuk.php" class="pure-button button-success">
                <i class="fa-solid fa-left-long"></i> Kembali
            </a>
        </header>
        <div class="form-container">
            <form action="fungsi_keluar_parkir.php" class="pure-form pure-form-stacked" method="POST">
                <div class="input-group">
                    <label for="pengemudi">Nama Pengemudi (Opsional)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="pengemudi" class="pure-input-1" name="pengemudi" value="<?php echo ambil_data_kendaraan_keluar()['pengemudi']; ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <label for="no_plat">Nomor Plat</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-id-card"></i>
                        <input type="text" class="pure-input-1" id="no_plat" name="no_plat" value="<?php echo ambil_data_kendaraan_keluar()['no_plat']; ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <label for="jenis_kendaraan">Kendaraan</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-clock"></i>
                        <input type="text" class="pure-input-1" name="jenis_kendaraan" id="jenis_kendaraan" value="<?php echo ambil_data_kendaraan_keluar()['jenis_kendaraan']; ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <label for="waktu_masuk">Waktu Masuk (waktu realtime saat form disubmit)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-clock"></i>
                        <input type="datetime-local" class="pure-input-1" name="waktu_masuk" id="waktu_masuk" value="<?php echo ambil_data_kendaraan_keluar()['waktu_masuk']; ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <label for="waktu_keluar">Waktu Keluar (waktu realtime saat form disubmit)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-clock"></i>
                        <input type="text" class="pure-input-1" name="waktu_keluar" id="waktu_keluar" value="<?php echo date('Y-m-d H:i:s' ); ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <input type="submit" class="pure-button button-success" name="" value="Simpan">
                </div>
            </form>
        </div>
    </div>
    <!-- END KREASI DEVELOPMENT -->
</div>

<?php include 'footer.php'; ?>
