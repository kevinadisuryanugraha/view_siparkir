<?php

    require_once "config/config.php";

    // untuk dashboard by husain
    function total_kendaraan()
    {
        global $db;
        $sql_total_kendaraan = "SELECT COUNT(*) AS total FROM siparkir_kendaraan";
        $eksekusi_total_kendaraan = $db->query($sql_total_kendaraan);
        return $eksekusi_total_kendaraan->fetch_assoc()['total'];
    }

    // untuk dashboard by husain
    function total_user()
    {
        global $db;
        $sql_total_user = "SELECT COUNT(*) AS total FROM siparkir_user";
        $eksekusi_total_user = $db->query($sql_total_user);
        return $eksekusi_total_user->fetch_assoc()['total'];
    }

    // untuk dashboard by husain
    function total_kendaraan_masuk_hari_ini()
    {
        global $db;
        $tanggal = date("Y-m-d");
        $sql_total_kendaraan_masuk_hari_ini = "SELECT COUNT(*) AS total FROM siparkir_transaksi WHERE DATE(waktu_masuk) = '$tanggal'";
        $eksekusi_total_kendaraan_masuk_hari_ini = $db->query($sql_total_kendaraan_masuk_hari_ini);
        return $eksekusi_total_kendaraan_masuk_hari_ini->fetch_assoc()['total'];
    }

    // untuk dashboard by husain
    function total_kendaraan_masuk_tahun_ini()
    {
        global $db;
        $tahun = date("Y");
        $sql_total_kendaraan_masuk_tahun_ini = "SELECT COUNT(*) AS total FROM siparkir_transaksi WHERE YEAR(waktu_masuk) = '$tahun'";
        $eksekusi_total_kendaraan_masuk_tahun_ini = $db->query($sql_total_kendaraan_masuk_tahun_ini);
        return $eksekusi_total_kendaraan_masuk_tahun_ini->fetch_assoc()['total'];
    }

    // untuk dashboard by husain
    function total_pemasukan_tahun_ini()
    {
        global $db;
        $tahun = date("Y");
        $sql_total_pemasukan_tahun_ini = "SELECT SUM(biaya) AS total FROM siparkir_transaksi WHERE YEAR(waktu_masuk) = '$tahun'";
        $eksekusi_total_pemasukan_tahun_ini = $db->query($sql_total_pemasukan_tahun_ini);
        return $eksekusi_total_pemasukan_tahun_ini->fetch_assoc()['total'];
    }

    // untuk dashboard by husain
    function total_pemasukan()
    {
        global $db;
        $sql_total_pemasukan = "SELECT SUM(biaya) AS total FROM siparkir_transaksi";
        $eksekusi_total_pemasukan = $db->query($sql_total_pemasukan);
        return $eksekusi_total_pemasukan->fetch_assoc()['total'];
    }

    // untuk kendaraan masuk
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