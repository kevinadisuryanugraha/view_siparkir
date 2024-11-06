<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kendaraan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/jenis_kedaraan.css">
    <link rel="stylesheet" href="assets/CSS/include_1.css">
</head>

<body>
    <div class="dashboard">
        <?php include_once "sidebar.php"; ?>
        <div class="container">
            <div class="header">
                <h1>Jenis Kendaraan & Biaya <span>Pengaturan parkir</span></h1>
                <div class="button">
                    <button><a href="tambah_kendaraan.php">+ Tambah</a></button>
                    <button> Cetak PDF</button>
                </div>
            </div>

            <table id="Jenis_kendaraan">
                <thead>
                    <tr>
                        <th class="no">NO</th>
                        <th>Jenis Kendaraan</th>
                        <th>Biaya/jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>truk</td>
                        <td>Rp.25,000</td>
                        <td class="button">
                            <a href="edit_jenis_kendaraan.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#Jenis_kendaraan').DataTable({
                responsive: true,
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                pageLength: 10
            });
        });
    </script>
</body>

</html>