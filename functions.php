<?php
// functions.php

// Koneksi ke databas
function koneksiDB() {
    $conn = new mysqli("localhost", "root", "", "db_siparkir");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    return $conn;
}

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
?>
