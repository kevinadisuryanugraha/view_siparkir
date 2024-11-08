<?php include 'header.php';
?>
<?php include 'sidebar.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (tambah_kendaraan_masuk()) {
        echo "<script>
            alert('Berhasil Tambah Kendaraan');
            window.location = 'kendaraan_masuk.php';
            </script>";
    }
}
?>
<link rel="stylesheet" href="../assets/CSS/tambah_kendaraan_masuk.css">
<link rel="stylesheet" href="../assets/CSS/style.css" type="text/css">

<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="../logout.php" class="logout-btn"  onclick="return confirm('yakin ingin keluar??')"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <h1>Kendaraan Masuk</h1>
    <div class="container">
        <header>
            <h2>Tambah Kendaraan Masuk</h2>
            <a href="kendaraan_masuk.php" class="pure-button button-success">
                <i class="fa-solid fa-left-long"></i> Kembali
            </a>
        </header>
        <div class="form-container">
            <form action="tambah_kendaraan_masuk.php" class="pure-form pure-form-stacked" method="post">
                <div class="input-group">
                    <label for="pengemudi">Nama Pengemudi (Opsional)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="pengemudi" name="pengemudi" class="pure-input-1" placeholder="Masukkan Nama Pengemudi" autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <label for="no_plat">Nomor Plat</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-id-card"></i>
                        <input type="text" class="pure-input-1" id="no_plat" name="no_plat" placeholder="Masukkan Nomor Plat Kendaraan">
                    </div>
                </div>
                <div class="input-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-car-side"></i>
                        <select id="jenis_kendaraan" name="jenis_kendaraan" class="pure-input-1">
                            <option value="">-- Pilih Jenis Kendaraan --</option>
                            <?php foreach (getKendaraan() as $row): ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['jenis_kendaraan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <input type="submit" class="pure-button button-success" name="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
    <!-- END KREASI DEVELOPMENT -->
</div>

<?php include 'footer.php'; ?>