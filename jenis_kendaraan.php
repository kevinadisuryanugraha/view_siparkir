<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link href="assets/CSS/jenis_kendaraan.css" rel="stylesheet" type="text/css">
<link href="assets/CSS/style.css" rel="stylesheet" type="text/css">
<?php 
include 'functions.php';
$vehicles = get_list_kendaraan();
delete_kendaraan();
?>

<div class="main-content">
    <header>
        <h2>Tambah Jenis Kendaraan<span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <!-- ruang kreasi developer -->
    <div class="container">
        <div class="header">
            <h1>Jenis Kendaraan & Biaya</h1>
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
            <?php if (count($vehicles) > 0) : ?>
                    <?php $no = 1;
                    foreach ($vehicles as $vehicle) : ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $vehicle['jenis_kendaraan']; ?></td>
                            <td>Rp<?php echo number_format($vehicle['biaya_jam']); ?></td>
                            <td class="button">
                                <a href="edit_jenis_kendaraan.php?id=<?php echo $vehicle['id']; ?>" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a>
                                <a href="jenis_kendaraan.php?id=<?php echo $vehicle['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin hapus kendaraan ini?')"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
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
    <!-- end kreasi development section -->
</div>
<?php include 'footer.php'; ?>