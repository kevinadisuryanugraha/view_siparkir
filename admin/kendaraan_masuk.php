<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<link rel="stylesheet" href="../assets/CSS/siparkir_kendaraan_masuk.css">
<link rel="stylesheet" href="../assets/CSS/style.css">

<div class="main-content">
    <header>
        <h2>Kendaraan Masuk<span>Control Panel</span></h2>
        <a href="../logout.php" class="logout-btn" onclick="return confirm('yakin ingin keluar??')"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <!-- ruang kreasi developer -->
    <div class="dashboard">
        <div class="container">
            <div class="header">
                <h1>Data Kendaraan Masuk</h1>
                <div class="button header_btn">
                    <a href="tambah_kendaraan_masuk.php" class="header_btn_isi" style="text-decoration:none"><i class="fa-solid fa-plus"></i> Tambah</a>
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
                        <th>AKSI</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (ambil_data_kendaraan_masuk() as $row):
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['no_plat']; ?></td>
                            <td><?php echo $row['pengemudi']; ?></td>
                            <td><?php echo $row['jenis_kendaraan']; ?></td>
                            <td><?php echo date('d-m-Y H:i:s',strtotime($row['waktu_masuk'])); ?></td>

                            <td>
                                <a href="tambah_kendaraan_keluar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    Keluar</a>
                            </td>
                            <td class="button">
                                <button class="btn btn-warning" onclick="window.location.href='edit_kendaraan_masuk.php?id=<?php echo $row['id']; ?>'"><i class="fa-solid fa-gear"></i></i></button>
                                <a href="hapus_kendaraan.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin hapus kendaraan ini?')"><i class="fa-solid fa-trash-can"></i></a>

                            </td>
                        </tr>
                    <?php
                        $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end kreasi development section -->
</div>

<script src="../assets/js/jquery-3.7.1.min.js"></script>
<script src="../assets/js/DataTables/datatables.min.js"></script>

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