<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>SIParkir</title>
    <link rel="stylesheet" href="assets/CSS/tambah_kendaraan_masuk.css?v=1.1">
    <link rel="stylesheet" href="assets/CSS//include_1.css">
</head>

<body>
    <div class="dashboard">
        <?php include_once "sidebar.php"; ?>
        <div class="container">
            <h1>Kendaraan Masuk</h1>
            <header>
                <h2>Tambah Kendaraan Masuk</h2>
                <a href="siparkir_kendaraan_masuk.php" class="pure-button button-success">
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
            <?php include_once "footer.php"; ?>
        </div>
    </div>
</body>

</html>