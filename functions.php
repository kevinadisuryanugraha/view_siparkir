<?php
// functions.php
include '../view_siparkir/config/config.php';

// Fungsi untuk menambahkan kendaraan keluar
function tambahKendaraan($noPlat, $pengemudi, $jenis, $waktuMasuk) {
    $conn = koneksiDB();
    $sql = "INSERT INTO siparkir_transaksi (no_plat, pengemudi, jenis, waktu_masuk) 
            VALUES ('$noPlat', '$pengemudi', '$jenis', '$waktuMasuk')";
    $conn->query($sql);
    $conn->close();
}

// Fungsi untuk menghapus kendaraan keluar
function hapusKendaraan($id) {
    $conn = koneksiDB();
    $sql = "DELETE FROM siparkir_transaksi WHERE id = $id";
    $conn->query($sql);
    $conn->close();
}

// Fungsi untuk membatalkan kendaraan keluar
function batalKeluar($id) {
    $conn = koneksiDB();
    $sql = "UPDATE siparkir_transaksi SET waktu_keluar = NULL WHERE id = $id";
    $conn->query($sql);
    $conn->close();
}

// Fungsi untuk menampilkan data kendaraan keluar
function getDataKendaraan() {
    $conn = koneksiDB();
    $result = $conn->query("SELECT * FROM siparkir_transaksi ORDER BY id ASC");
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $conn->close();
    return $data;
}

// Fungsi untuk mendapatkan path PDF
function getPDFPath($id) {
    $conn = koneksiDB();
    $sql = "SELECT file_pdf FROM siparkir_transaksi WHERE id = $id";
    $result = $conn->query($sql);
    $filePDF = $result->fetch_assoc()['file_pdf'];
    $conn->close();
    return $filePDF;
}

function get_all_users() {

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
