<?php
require_once '../config/config.php';

// fungsi tambah kendaraan masuk
function tambah_kendaraan_masuk()
{
    global $db;
    $plat = $_POST['no_plat'];
    $pengemudi = $_POST['pengemudi'];
    $id_kendaraan = $_POST['jenis_kendaraan'];


    $sql_tambah = "INSERT INTO siparkir_transaksi (no_plat, pengemudi, id_kendaraan, waktu_masuk) 
                VALUES ('$plat', '$pengemudi', '$id_kendaraan', NOW())";
    $eksekusi = $db->query($sql_tambah);
    return $eksekusi;
}

// fungsi mengambil data untuk edit kendaraan masuk
function edit_kendaraan_parkir_masuk()
{
    global $db;
    $transaksi_kendaraan = $_GET['id'];  // Ambil ID kendaraan dari URL
    $sql_ambil_edit = "SELECT siparkir_transaksi.*, siparkir_kendaraan.jenis_kendaraan
            FROM siparkir_transaksi
            LEFT JOIN siparkir_kendaraan 
            ON siparkir_transaksi.id_kendaraan = siparkir_kendaraan.id 
            WHERE siparkir_transaksi.id = '$transaksi_kendaraan'";  // Kondisi WHERE berdasarkan ID
    $eksekusi = $db->query($sql_ambil_edit);
    return $eksekusi->fetch_assoc();
}


function edit_kendaraan_masuk()
{
    global $db;

    $transaksi_kendaraan = $_GET['id'];  // Ambil ID kendaraan dari URL
    $plat = $_POST['no_plat'];           // Ambil data dari form
    $pengemudi = $_POST['pengemudi'];    // Ambil data pengemudi
    $jenis_kendaraan = $_POST['jenis_kendaraan'];    // Ambil data pengemudi

    // Perbaiki query update
    $sql_update_kendaraan_masuk =
        "UPDATE siparkir_transaksi 
        SET no_plat = '$plat', 
            pengemudi = '$pengemudi' ,
            id_kendaraan = '$jenis_kendaraan'
        WHERE id = '$transaksi_kendaraan'";  // Pastikan kondisi WHERE mengacu pada ID

    $eksekusi = $db->query($sql_update_kendaraan_masuk);

    return $eksekusi;  // Kembalikan hasil eksekusi query (true/false)
}



// fungsi  hapus kendaraan masuk
function delete_kendaraan_masuk()
{
    global $db;
    $transaksi_kendaraan = $_GET['id'];
    $sql_delete_kendaraan_masuk = "DELETE FROM siparkir_transaksi WHERE id='$transaksi_kendaraan'";
    $eksekusi = $db->query($sql_delete_kendaraan_masuk);
    return $eksekusi;
}

// Fungsi untuk menambahkan kendaraan keluar
function tambahKendaraan($noPlat, $pengemudi, $jenis, $waktuMasuk)
{
    global $db;
    $sql = "INSERT INTO siparkir_transaksi (no_plat, pengemudi, jenis, waktu_masuk) 
            VALUES ('$noPlat', '$pengemudi', '$jenis', '$waktuMasuk')";
    $db->query($sql);
    $db->close();
}

// Fungsi untuk menghapus kendaraan keluar
function hapusKendaraan($id)
{
    global $db;
    $sql = "DELETE FROM siparkir_transaksi WHERE id = $id";
    $db->query($sql);
    $db->close();
}

// Fungsi untuk membatalkan kendaraan keluar
function batalKeluar($id)
{
    global $db;
    $sql = "UPDATE siparkir_transaksi SET waktu_keluar = '' WHERE id = $id";
    $db->query($sql);
    $db->close();
}

function get_all_users()
{

    global $db;
    $sql = "SELECT * FROM siparkir_user";
    $result = $db->query($sql);

    $users = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    return $users;
}


function total_kendaraan()
{
    global $db;
    $sql_total_kendaraan = "SELECT COUNT(*) AS total FROM siparkir_kendaraan";
    $eksekusi_total_kendaraan = $db->query($sql_total_kendaraan);
    return $eksekusi_total_kendaraan->fetch_assoc()['total'];
}

function total_user()
{
    global $db;
    $sql_total_user = "SELECT COUNT(*) AS total FROM siparkir_user";
    $eksekusi_total_user = $db->query($sql_total_user);
    return $eksekusi_total_user->fetch_assoc()['total'];
}

function total_kendaraan_masuk_hari_ini()
{
    global $db;
    $tanggal = date("Y-m-d");
    $sql_total_kendaraan_masuk_hari_ini = "SELECT COUNT(*) AS total FROM siparkir_transaksi WHERE DATE(waktu_masuk) = '$tanggal'";
    $eksekusi_total_kendaraan_masuk_hari_ini = $db->query($sql_total_kendaraan_masuk_hari_ini);
    return $eksekusi_total_kendaraan_masuk_hari_ini->fetch_assoc()['total'];
}

function total_kendaraan_masuk_tahun_ini()
{
    global $db;
    $tahun = date("Y");
    $sql_total_kendaraan_masuk_tahun_ini = "SELECT COUNT(*) AS total FROM siparkir_transaksi WHERE YEAR(waktu_masuk) = '$tahun'";
    $eksekusi_total_kendaraan_masuk_tahun_ini = $db->query($sql_total_kendaraan_masuk_tahun_ini);
    return $eksekusi_total_kendaraan_masuk_tahun_ini->fetch_assoc()['total'];
}

function total_pemasukan_tahun_ini()
{
    global $db;
    $tahun = date("Y");
    $sql_total_pemasukan_tahun_ini = "SELECT SUM(biaya) AS total FROM siparkir_transaksi WHERE YEAR(waktu_masuk) = '$tahun'";
    $eksekusi_total_pemasukan_tahun_ini = $db->query($sql_total_pemasukan_tahun_ini);
    return $eksekusi_total_pemasukan_tahun_ini->fetch_assoc()['total'];
}

function total_pemasukan()
{
    global $db;
    $sql_total_pemasukan = "SELECT SUM(biaya) AS total FROM siparkir_transaksi";
    $eksekusi_total_pemasukan = $db->query($sql_total_pemasukan);
    return $eksekusi_total_pemasukan->fetch_assoc()['total'];
}

function getKendaraan(): array
{
    global $db;
    $sql = $db->query("SELECT id, jenis_kendaraan FROM siparkir_kendaraan");
    $data = [];

    while ($row = $sql->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

function ambil_data_kendaraan_masuk()
{
    global $db;

    $sql_ambil_data_transaksi = "SELECT siparkir_transaksi.*, siparkir_kendaraan.jenis_kendaraan
            FROM siparkir_transaksi
            LEFT JOIN siparkir_kendaraan 
            ON siparkir_transaksi.id_kendaraan = siparkir_kendaraan.id";
    $eksekusi = $db->query($sql_ambil_data_transaksi);
    $result = array();

    while ($row = $eksekusi->fetch_assoc()) {
        $result[] = $row;
    }

    return $result;
}

function ambil_data_kendaraan_keluar()
{
    global $db;

    $id_parkir = $_GET['id'];
    $sql_ambil_data_transaksi = "SELECT siparkir_transaksi.*, siparkir_kendaraan.*
            FROM siparkir_transaksi
            LEFT JOIN siparkir_kendaraan 
            ON siparkir_transaksi.id_kendaraan = siparkir_kendaraan.id WHERE siparkir_transaksi.id = '$id_parkir'";
    $eksekusi = $db->query($sql_ambil_data_transaksi);

    return $eksekusi->fetch_assoc();
}
function tampil_data_kendaraan_keluar()
{
    global $db;

    $sql_tampil_data_transaksi = "SELECT siparkir_transaksi.*, siparkir_kendaraan.*
            FROM siparkir_transaksi
            LEFT JOIN siparkir_kendaraan 
            ON siparkir_transaksi.id_kendaraan = siparkir_kendaraan.id";
    $eksekusi = $db->query($sql_tampil_data_transaksi);
    $result = array();

    while ($row = $eksekusi->fetch_assoc()) {
        $result[] = $row;
    }

    return $result;
}
function get_list_kendaraan()
{
    global $db;

    $sql = "SELECT * FROM siparkir_kendaraan";
    $eksekusi = $db->query($sql);

    $data = array();
    while ($row = $eksekusi->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

function add_kendaraan()
{
    global $db;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $biaya_jam = $_POST['biaya_jam'];

        $sql = "INSERT INTO siparkir_kendaraan (jenis_kendaraan, biaya_jam) VALUES ('$jenis_kendaraan', '$biaya_jam')";
        $eksekusi = $db->query($sql);

        if ($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    }
}

function get_kendaraan_by_id()
{
    global $db;

    $data = array();
    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];
        $sql = "SELECT * FROM siparkir_kendaraan WHERE id = '$get_id'";
        $eksekusi = $db->query($sql);

        if ($eksekusi && $eksekusi->num_rows > 0) {
            $data = $eksekusi->fetch_assoc();
        }
    }
    return $data;
}

function update_kendaraan()
{
    global $db;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $biaya_jam = $_POST['biaya_jam'];

        $sql = "UPDATE siparkir_kendaraan SET jenis_kendaraan = '$jenis_kendaraan', biaya_jam = '$biaya_jam' WHERE id = '$id'";
        $eksekusi = $db->query($sql);

        if ($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    }
}


function delete_kendaraan()
{
    global $db;

    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];

        $sql = "DELETE FROM siparkir_kendaraan WHERE id = '$get_id'";
        $eksekusi = $db->query($sql);

        if ($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    }
}

function getLaporanPemasukan($startDate, $endDate)
{
    global $db;

    $query = "SELECT * FROM siparkir_transaksi WHERE waktu_masuk BETWEEN ? AND ?";
    $stmt = $db->prepare($query);

    if (!$stmt) {
        die("Query preparation failed: " . $db->error);
    }

    $stmt->bind_param("ss", $startDate, $endDate);
    $stmt->execute();

    $result = $stmt->get_result();
    $results = $result->fetch_all(MYSQLI_ASSOC);

    $totalPemasukan = 0;
    foreach ($results as $row) {
        $totalPemasukan += $row['biaya'];
    }

    return ['data' => $results, 'total' => $totalPemasukan];
}
