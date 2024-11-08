<?php

    require_once "../functions.php";

        $delete_user = delete_user();
        if($delete_user)
        {
            echo "<script>
            alert('data Berhasil dihapus');
            window.location = 'halaman_profil.php';
            </script>";
        }
        else
        {
             echo "<script>
            alert('data gagal dihapus');
            </script>";
        }