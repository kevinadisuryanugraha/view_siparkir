<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<?php
// Mendapatkan id_parkir dari parameter URL
$id_parkir = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $id_parkir) {

    $data_kendaraan =  ambil_data_kendaraan_keluar($id_parkir);

    $pengemudi = $_POST['pengemudi'];
    $no_plat = $_POST['no_plat'];
    $waktu_masuk = $_POST['waktu_masuk'];
    $waktu_keluar = $_POST['waktu_keluar'];
    $durasi = strtotime($waktu_keluar) - strtotime($waktu_masuk);
    $jam = floor($durasi / 3600);
    $biaya = $jam * ($data_kendaraan['biaya_jam'] ?? 0);

    $sql_fungsi_keluar_parkir = "UPDATE siparkir_transaksi SET 
        pengemudi = '$pengemudi', 
        no_plat = '$no_plat',
        waktu_masuk = '$waktu_masuk', 
        waktu_keluar = '$waktu_keluar',
        durasi = '$durasi', 
        biaya = '$biaya' 
        WHERE id = '$id_parkir'";

    $eksekusi_fungsi_keluar_parkir = $db->query($sql_fungsi_keluar_parkir);

    if ($eksekusi_fungsi_keluar_parkir) {
        echo "<script>
            alert('Berhasil Keluar');
            window.location = 'kendaraan_keluar.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal Keluar');
        window.location = 'tambah_kendaraan_keluar.php?id=$id_parkir';
    </script>";
    }
}


// Mendapatkan data kendaraan sebelum form ditampilkan
$data_kendaraan = ambil_data_kendaraan_keluar($id_parkir);
?>

<link rel="stylesheet" href="../assets/CSS/tambah_kendaraan_masuk.css">
<link rel="stylesheet" href="../assets/CSS/style.css" type="text/css">

<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="../logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <div class="container">
        <header>
            <h2>Tambah Kendaraan Keluar</h2>
            <a href="kendaraan_masuk.php" class="pure-button button-success">
                <i class="fa-solid fa-left-long"></i> Kembali
            </a>
        </header>
        <div class="form-container">
            <form action="tambah_kendaraan_keluar.php?id=<?php echo $id_parkir; ?>" class="pure-form pure-form-stacked" method="POST">

                <div class="input-group">
                    <label for="pengemudi">Nama Pengemudi (Opsional)</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="pengemudi" class="pure-input-1" name="pengemudi" value="<?php echo $data_kendaraan['pengemudi'] ?? ''; ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <label for="no_plat">Nomor Plat</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-id-card"></i>
                        <input type="text" class="pure-input-1" id="no_plat" name="no_plat" value="<?php echo $data_kendaraan['no_plat'] ?? ''; ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <label for="jenis_kendaraan">Kendaraan</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-clock"></i>
                        <input type="text" class="pure-input-1" name="jenis_kendaraan" id="jenis_kendaraan" value="<?php echo $data_kendaraan['jenis_kendaraan'] ?? ''; ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <label for="waktu_masuk">Waktu Masuk</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-clock"></i>
                        <input type="datetime-local" class="pure-input-1" name="waktu_masuk" id="waktu_masuk" value="<?php echo $data_kendaraan['waktu_masuk'] ?? ''; ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <label for="waktu_keluar">Waktu Keluar</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-clock"></i>
                        <input type="text" class="pure-input-1" name="waktu_keluar" id="waktu_keluar" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
                    </div>
                </div>
                <div class="input-group">
                    <input type="submit" class="pure-button button-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>