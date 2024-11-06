<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link href="assets/CSS/jenis_kendaraan.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/CSS/style.css">
    
<div class="main-content">
    <header>
        <h2>Jenis Kendaraan & Biaya <span>Control Panel</span></h2>
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
                <tr>
                    <td>1</td>
                    <td>truk</td>
                    <td>Rp.25,000</td>
                    <td class="button">
                        <a href="edit_jenis_kendaraan.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i></a >
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a >
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>

    <script>
        $(document).ready(function () {
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
   
</body>

</html>
