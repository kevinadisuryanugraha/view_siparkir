<?php
require_once 'config/config.php';

// fungsi tambah kendaraan masuk
function tambah_kendaraan_masuk()
{
    $plat           = $_POST['no_plat'];
    $pengemudi      = $_POST['pengemudi'];
    $jenis_vehicle  = $_POST['id_kendaraan'];

    $sql_tambah = "INSERT INTO siparkir_transaksi (no_plat, pengemudi, id_kendaraan, waktu_masuk) 
                VALUES ('$plat', '$pengemudi', '$jenis_vehicle', 'NOW()')";
    $eksekusi = connect_db()->query($sql_tambah);
    return $eksekusi;
}

// fungsi mengambil data untuk edit kendaraan masuk
function edit_kendaraan_masuk()
{
    $transaksi_kendaraan = $_GET['siparkir_transaksi'];
    $sql_ambil_edit = "SELECT * FROM siparkir_transaksi WHERE id='$transaksi_kendaraan'";
    $eksekusi = connect_db()->query($sql_ambil_edit);
    return $eksekusi->fetch_assoc();

    $plat           = $_POST['no_plat'];
    $pengemudi      = $_POST['pengemudi'];
    $jenis_vehicle  = $_POST['id_kendaraan'];

    $sql_update_kendaraan_masuk =
        "UPDATE siparkir_transaksi 
                        SET no_plat ='$plat, 
                        pengemudi='$pengemudi, 
                        id_kendaraan='$jenis_vehicle'
                        WHERE id='$transaksi_kendaraan'";
    $eksekusi = connect_db()->query($sql_update_kendaraan_masuk);
    return $eksekusi;
}

// fungsi  hapus kendaraan masuk
function delete_kendaraan_masuk()
{
    $transaksi_kendaraan = $_GET['id'];
    $sql_delete_kendaraan_masuk = "DELETE FROM siparkir_transaksi WHERE id='$transaksi_kendaraan'";
    $eksekusi = connect_db()->query($sql_delete_kendaraan_masuk);
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
    $sql = "UPDATE siparkir_transaksi SET waktu_keluar = NULL WHERE id = $id";
    $db->query($sql);
    $db->close();
}

// Fungsi untuk menampilkan data kendaraan keluar
function getDataKendaraan()
{
    global $db;
    $result = $db->query("SELECT * FROM siparkir_transaksi ORDER BY id ASC");
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $db->close();
    return $data;
}

// Fungsi untuk mendapatkan path PDF
function getPDFPath($id)
{
    global $db;
    $sql = "SELECT file_pdf FROM siparkir_transaksi WHERE id = $id";
    $result = $db->query($sql);
    $filePDF = $result->fetch_assoc()['file_pdf'];
    $db->close();
    return $filePDF;
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

function add_kendaraan() {
    global $db;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $biaya_jam = $_POST['biaya_jam'];

        $sql = "INSERT INTO siparkir_kendaraan (jenis_kendaraan, biaya_jam) VALUES ('$jenis_kendaraan', '$biaya_jam')";
        $eksekusi = $db->query($sql);

        if($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    } 
}

function get_kendaraan_by_id() {
    global $db;

    $data = array();
    if(isset($_GET['id'])) {
        $get_id = $_GET['id'];
        $sql = "SELECT * FROM siparkir_kendaraan WHERE id = '$get_id'";
        $eksekusi = $db->query($sql);

        if($eksekusi && $eksekusi->num_rows > 0) {
            $data = $eksekusi->fetch_assoc();
        }
    }
    return $data;
}

function update_kendaraan() {
    global $db;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $biaya_jam = $_POST['biaya_jam'];

        $sql = "UPDATE siparkir_kendaraan SET jenis_kendaraan = '$jenis_kendaraan', biaya_jam = '$biaya_jam' WHERE id = '$id'";
        $eksekusi = $db->query($sql);

        if($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    } 
}

function delete_kendaraan() {
    global $db;

    if(isset($_GET['id'])) {
        $get_id = $_GET['id'];
        
        $sql = "DELETE FROM siparkir_kendaraan WHERE id = '$get_id'";
        $eksekusi = $db->query($sql);

        if($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    }
}

// fungsi login
function login_siparkir()
{
    global $conn;
    $email = $_POST['email'];
    $password = md5($_POST['password']); // pastikan password ter-hash

    // Query login user
    $sql_login_user = "SELECT * FROM siparkir_user WHERE email = '$email' AND password = '$password'";
    $eksekusi_login_user = $db->query($sql_login_user);

    // Jika login berhasil
    if ($eksekusi_login_user->num_rows > 0) {
        $user = $eksekusi_login_user->fetch_assoc();
        $_SESSION['log-in'] = true;
        $_SESSION['email'] = $user['email'];
        $_SESSION['id_user'] = $user['id_user'];
        return $user;
    }else{
        return false;
    }
}
// fungsi logout
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();