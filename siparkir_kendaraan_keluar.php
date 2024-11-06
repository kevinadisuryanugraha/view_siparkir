<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siparkir - Kendaraan Keluar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/siparkir_kendaraan_keluar.css">
    <link rel="stylesheet" href="assets/CSS/include_1.css">

</head>

<body>
    <div class="dashboard">
        <?php include_once "sidebar.php" ?>
        <div class="container">
            <div class="header">
                <h1>Kendaraan Keluar <span>Data kendaraan keluar</span></h1>
            </div>
            <table id="kendaraan">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO. PLAT</th>
                        <th>PENGEMUDI</th>
                        <th>JENIS KENDARAAN</th>
                        <th>WAKTU MASUK</th>
                        <th>WAKTU KELUAR</th>
                        <th>DURASI</th>
                        <th>BIAYA</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>13-06-2023 14:14:07</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.15,000,-</td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <button class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Batal</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <?php include_once "footer.php" ?>
        </div>
    </div>

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/DataTables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#kendaraan').DataTable({
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