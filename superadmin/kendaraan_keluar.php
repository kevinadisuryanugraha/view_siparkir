<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="../assets/CSS/siparkir_kendaraan_keluar.css?v=1.1">
<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Main Layout */
    body {
        display: flex;
        min-height: 100vh;
        background-color: #f4f6f9;
    }

    .dashboard {
        display: flex;
        width: 100%;
    }

    /* Main Content */
    .main-content {
        flex: 1;
        padding: 20px;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    header h2 {
        font-size: 24px;
        color: #333;
    }

    header h2 span {
        font-size: 16px;
        color: #666;
        margin-left: 10px;
    }

    .logout-btn {
        text-decoration: none;
        color: white;
        background-color: #1b5e20;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
        /* Menambahkan efek transisi */
        font-weight: bold;
        /* Menebalkan teks */
    }

    .logout-btn:hover {
        background-color: #1b9e40;
        /* Mengubah warna saat hover */
        transform: scale(1.05);
        /* Sedikit memperbesar tombol saat hover */
    }

    /* Stats Cards */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        /* Tiga kolom */
        gap: 15px;
        /* Jarak antar kartu */
        margin-bottom: 20px;
    }

    .card {
        background-color: #e3f2fd;
        /* Warna latar belakang untuk kartu */
        padding: 20px;
        border-radius: 8px;
        position: relative;
        color: #333;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
        /* Transisi saat hover */
    }

    .card:hover {
        transform: scale(1.05);
        /* Memperbesar kartu saat hover */
    }

    .card h3 {
        font-size: 24px;
        margin-bottom: 5px;
    }

    .card p {
        font-size: 14px;
        color: #555;
    }

    .card .card-icon {
        font-size: 36px;
        color: #777;
        margin-bottom: 10px;
    }

    /* Color Variants */
    .green {
        background-color: #c8e6c9;
    }

    .orange {
        background-color: #ffe0b2;
    }

    .blue {
        background-color: #bbdefb;
    }

    /* Charts */
    .charts-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .chart {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .chart h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #333;
    }

    .chart-placeholder {
        height: 200px;
        background-color: #e0e0e0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        font-size: 14px;
    }
</style>

<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="../logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <!-- ruang kreasi developer -->
    <div class="dashboard">
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (tampil_data_kendaraan_keluar() as $row):
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['no_plat']; ?></td>
                            <td><?php echo $row['pengemudi']; ?></td>
                            <td><?php echo $row['jenis_kendaraan']; ?></td>
                            <td><?php echo date('d-m-Y H:i:s',strtotime($row['waktu_masuk'])); ?></td>
                            <td><?php echo date('d-m-Y H:i:s',strtotime($row['waktu_keluar'])); ?></td>
                            <td><?php
                                $waktu_masuk = $row['waktu_masuk'];
                                $waktu_keluar = $row['waktu_keluar'];

                                $durasi = strtotime($waktu_keluar) - strtotime($waktu_masuk);

                                echo floor($durasi / 3600) . 'jam' . floor($durasi / 60 % 60) . 'menit' . $durasi % 60 . 'detik';
                                ?></td>
                            <td>Rp.<?php
                                    $jam = floor($durasi / 3600);
                                    echo number_format($jam * $row['biaya'], 0, ",", "."); ?></td>
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