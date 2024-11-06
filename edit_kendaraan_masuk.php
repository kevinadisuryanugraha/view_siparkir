<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
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
            <form action="" class="pure-form pure-form-stacked">
                <div class="input-group">
                    <label for="pengemudi">Nama Pengemudi (Opsional)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="pengemudi" class="pure-input-1" placeholder="Masukkan Nama Pengemudi" value="Joni">
                    </div>
                </div>
                <div class="input-group">
                    <label for="no_plat">Nomor Plat</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-id-card"></i>
                        <input type="text" class="pure-input-1" id="no_plat" placeholder="Masukkan Nomor Plat Kendaraan" value="B 1990 DUV">
                    </div>
                </div>
                <div class="input-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-car-side"></i>
                        <select name="" id="jenis_kendaraan" class="pure-input-1">
                            <option value="">SUV</option>
                            <option value="">-- Pilih Jenis Kendaraan --</option>
                            <option value="">Motor Gede</option>
                            <option value="">Sport</option>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <label for="waktu_masuk">Waktu Masuk (waktu realtime saat form disubmit)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-clock"></i>
                        <input type="datetime-local" class="pure-input-1" name="waktu_masuk" id="waktu_masuk" placeholder="Waktu Masuk Kendaraan" value="20/1/2024 20:00">
                    </div>
                </div>
                <div class="input-group">
                    <input type="submit" class="pure-button button-success" name="" value="Edit">
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