<?php

    require_once "config/config.php";

        
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id_parkir = $_GET['id'];
        function mengambil_kendaraan_keluar($id_parkir)
        {
            global $db;

            $sql_ambil_data_transaksi = "SELECT siparkir_transaksi.*, siparkir_kendaraan.*
            FROM siparkir_transaksi
            LEFT JOIN siparkir_kendaraan 
            ON siparkir_transaksi.id_kendaraan = siparkir_kendaraan.id WHERE siparkir_transaksi.id ='$id_parkir'";
            $eksekusi = $db->query($sql_ambil_data_transaksi);
            
            return $eksekusi->fetch_assoc();
        }
        
        $data_kendaraan = mengambil_kendaraan_keluar($id_parkir);

        $pengemudi = $_POST['pengemudi'];
        $no_plat = $_POST['no_plat'];
        $kendaraan = $_POST['jenis_kendaraan'];
        $waktu_masuk = $_POST['waktu_masuk'];
        $waktu_keluar = $_POST['waktu_keluar'];
        $durasi = strtotime($waktu_keluar) - strtotime($waktu_masuk);
        $jam = floor($durasi / 3600);
        $biaya = $jam * $data_kendaraan['biaya_jam'];

        $sql_fungsi_keluar_parkir = "UPDATE siparkir_transaksi SET pengemudi ='$pengemudi', no_plat='$no_plat' 
                                    ,kendaraan = '$kendaraan', waktu_masuk='$waktu_masuk', waktu_keluar = '$waktu_keluar'
                                    ,durasi = '$durasi', biaya = '$biaya' WHERE id = '$id_parkir'";
        $eksekusi_fungsi_keluar_pakir = $db->query($sql_fungsi_keluar_parkir);
        if($eksekusi_fungsi_keluar_pakir)
        {
            echo "<script>
                alert('Berhasil Keluar');
                window.location = 'kendaraan_keluar.php';
            </script>";
        }
        else
        {
            // echo "<script>
            //     alert('Gagal Keluar');
            //     window.location = 'tambah_kendaraan_keluar.php';
            // </script>";
        }
    }