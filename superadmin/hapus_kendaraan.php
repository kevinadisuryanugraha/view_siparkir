<?php

    require_once "functions.php";

        $delete = delete_kendaraan_masuk();
        if($delete)
        {
            echo "<script>
            alert('data Berhasil dihapus');
            window.location = 'kendaraan_masuk.php';
            </script>";
        }
        else
        {
             echo "<script>
            alert('data gagal dihapus');
            </script>";
        }