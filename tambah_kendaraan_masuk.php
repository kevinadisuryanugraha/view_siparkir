<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="assets/CSS/tambah_kendaraan_masuk.css">
<link rel="stylesheet" href="assets/CSS/style.css" type="text/css">

<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <h1>Kendaraan Masuk</h1>
    <div class="container">
        <header>
            <h2>Tambah Kendaraan Masuk</h2>
            <a href="edit_kendaraan_masuk.html" class="pure-button button-success">
                <i class="fa-solid fa-left-long"></i> Kembali
            </a>
        </header>
        <div class="form-container">
            <form action="" class="pure-form pure-form-stacked">
                <div class="input-group">
                    <label for="pengemudi">Nama Pengemudi (Opsional)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="pengemudi" class="pure-input-1" placeholder="Masukkan Nama Pengemudi" autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <label for="no_plat">Nomor Plat</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-id-card"></i>
                        <input type="text" class="pure-input-1" id="no_plat" placeholder="Masukkan Nomor Plat Kendaraan">
                    </div>
                </div>
                <div class="input-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-car-side"></i>
                        <select name="" id="jenis_kendaraan" class="pure-input-1">
                            <option value="">-- Pilih Jenis Kendaraan --</option>
                            <option value="">SUV</option>
                            <option value="">Motor Gede</option>
                            <option value="">Sport</option>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <label for="waktu_masuk">Waktu Masuk (waktu realtime saat form disubmit)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-clock"></i>
                        <input type="datetime-local" class="pure-input-1" name="waktu_masuk" id="waktu_masuk" placeholder="Waktu Masuk Kendaraan">
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
