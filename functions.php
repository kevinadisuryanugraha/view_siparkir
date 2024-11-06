<?php
// functions.php


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

