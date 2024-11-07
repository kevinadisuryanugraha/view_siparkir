<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (edit_kendaraan_masuk()) {
        echo "<script>
            alert('Berhasil Edit Kendaraan');
            window.location = 'kendaraan_masuk.php';
            </script>";
    } else {
        echo "<script>
            alert('Gagal Edit Kendaraan');
            </script>";
    }
}

$eksekusi = edit_kendaraan_parkir_masuk();  // Ambil data kendaraan yang akan diedit
?>

<link rel="stylesheet" href="assets/CSS/edit_kendaraan_masuk.css">
<link rel="stylesheet" href="assets/CSS/style.css" type="text/css">

<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>
    <!-- START KREASI DEVELOPMENT -->
    <h1>Kendaraan Masuk</h1>
    <div class="container">
        <header>
            <h2>Edit Kendaraan Masuk</h2>
            <a href="kendaraan_masuk.php" class="pure-button button-success">
                <i class="fa-solid fa-left-long"></i> Kembali
            </a>
        </header>
        <div class="form-container">
            <form action="" class="pure-form pure-form-stacked" method="post">
                <div class="input-group">
                    <label for="pengemudi">Nama Pengemudi (Opsional)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="pengemudi" class="pure-input-1" name="pengemudi" placeholder="Masukkan Nama Pengemudi" value="<?php echo $eksekusi['pengemudi']; ?>">
                    </div>
                </div>
                <div class="input-group">
                    <label for="no_plat">Nomor Plat</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-id-card"></i>
                        <input type="text" class="pure-input-1" id="no_plat" name="no_plat" placeholder="Masukkan Nomor Plat Kendaraan" value="<?php echo $eksekusi['no_plat']; ?>">
                    </div>
                </div>
                <div class="input-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-car-side"></i>
                        <select name="jenis_kendaraan" id="jenis_kendaraan" class="pure-input-1">
                            <?php foreach (getKendaraan() as $row): ?>
                                <option value="<?php echo $row['id']; ?>" <?php echo ($row['id'] == ($eksekusi['id_kendaraan'] ?? '')) ? 'selected' : ''; ?>>
                                    <?php echo $row['jenis_kendaraan']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <input type="submit" class="pure-button button-success" value="Edit">
                </div>
            </form>
        </div>
    </div>
    <!-- END KREASI DEVELOPMENT -->
</div>

<script>
    function setCurrentDateTime() {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');

        // Format tanggal dan waktu lokal untuk input datetime-local
        const localDatetime = `${year}-${month}-${day}T${hours}:${minutes}`;
        document.getElementById('waktu_masuk').value = localDatetime;
    }

    // Memanggil fungsi saat halaman dimuat
    window.onload = setCurrentDateTime;
</script>

<?php include 'footer.php'; ?>
