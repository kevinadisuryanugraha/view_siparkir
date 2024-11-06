<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="assets/CSS/siparkir_kendaraan_masuk.css">
<link rel="stylesheet" href="assets/CSS/style.css">

<div class="main-content">
    <header>
        <h2>Kendaraan Masuk<span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <!-- ruang kreasi developer -->
    <div class="dashboard">
        <div class="container">
            <div class="header">
                <h1>Data Kendaraan Masuk</h1>
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
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</a>
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
                            <a href="kendaraan_keluar.php" class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Keluar</a>
                        </td>
                        <td class="button">
                            <a class="btn btn-success"><i class="fa-solid fa-file"></i></a>
                            <a href="edit_kendaraan_masuk.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                            <a class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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
        </div>
    </div>
    <!-- end kreasi development section -->
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
        });
    });
</script>

<?php include 'footer.php'; ?>