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
    <link rel="stylesheet" href="assets/CSS/siparkir_kendaraan_masuk.css?v=1.1">
    <link rel="stylesheet" href="assets/CSS/include_1.css">

</head>

<body>

    <div class="dashboard">
        <?php include_once "sidebar.php" ?>
        <div class="container">
            <div class="header">
                <h1>Kendaraan Masuk <span>Data kendaraan Masuk</span></h1>
                <div class="button header_btn">
                    <a href="tambah_kendaraan_masuk.php" class="header_btn_isi" style="text-decoration:none"><i class="fa-solid fa-plus"></i> Tambah</a>
                    <button class="header_btn_isi"><i class="fa-solid fa-file-invoice"></i> cetak PDF</button>
                </div>
            </div>
            <table id="kendaraan">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO. PLAT</th>
                        <th>NAMA PENGEMUDI</th>
                        <th>JENIS KENDARAAN</th>
                        <th>WAKTU MASUK</th>
                        <th>DURASI</th>
                        <th>ESTIMASI BIAYA</th>
                        <th>AKSI</th>
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
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B 9989 HJU</td>
                        <td>-</td>
                        <td>MINIBUS</td>
                        <td>13-06-2023 14:12:29</td>
                        <td>0 jam, 1 menit, 38 detik</td>
                        <td>Rp.23,980,000,-</td>
                        <td>
                            <button class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</button>
                        </td>
                        <td class="button">
                            <button class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
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