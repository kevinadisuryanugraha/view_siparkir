<?php
require_once 'config/congfig.php';

// fungsi tambah kendaraan masuk by Abdul
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

// fungsi  hapus kendaraan masuk by Abdul
function delete_kendaraan_masuk()
{
    $transaksi_kendaraan = $_GET['id'];
    $sql_delete_kendaraan_masuk = "DELETE FROM siparkir_transaksi WHERE id='$transaksi_kendaraan'";
    $eksekusi = connect_db()->query($sql_delete_kendaraan_masuk);
    return $eksekusi;
}
// Fungsi untuk menambahkan kendaraan keluar
function tambahKendaraan($noPlat, $pengemudi, $jenis, $waktuMasuk) {
    global $db;
    $sql = "INSERT INTO siparkir_transaksi (no_plat, pengemudi, jenis, waktu_masuk) 
            VALUES ('$noPlat', '$pengemudi', '$jenis', '$waktuMasuk')";
    $db->query($sql);
    $db->close();
}

// Fungsi untuk menghapus kendaraan keluar
function hapusKendaraan($id) {
    global $db;
    $sql = "DELETE FROM siparkir_transaksi WHERE id = $id";
    $db->query($sql);
    $db->close();
}

// Fungsi untuk membatalkan kendaraan keluar
function batalKeluar($id) {
    global $db;
    $sql = "UPDATE siparkir_transaksi SET waktu_keluar = NULL WHERE id = $id";
    $db->query($sql);
    $db->close();
}

// Fungsi untuk menampilkan data kendaraan keluar
function getDataKendaraan() {
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
function getPDFPath($id) {
    global $db;
    $sql = "SELECT file_pdf FROM siparkir_transaksi WHERE id = $id";
    $result = $db->query($sql);
    $filePDF = $result->fetch_assoc()['file_pdf'];
    $db->close();
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
