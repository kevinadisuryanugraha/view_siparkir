<?php
require_once 'functions.php';
$delete_kendaraan_masuk = delete_kendaraan_masuk();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = intval($_GET['id']);
    if(delete_kendaraan_masuk($id))
    {
        echo "<script>
            alert('Berhasil Hapus Kendaraan');
            window.location ='kendaraan_masuk.php';
            </script>";
    } 
    else
    {
        echo "<script>
            alert('Gagal Hapus Kendaraan');
            window.location ='kendaraan_masuk.php';
            </script>";
    }
}
?>