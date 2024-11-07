<?php
include 'header.php';
include 'sidebar.php';

$startDate = isset($_GET['startDate']) ? $_GET['startDate'] : null;
$endDate = isset($_GET['endDate']) ? $_GET['endDate'] : null;

$dataLaporan = [];
$totalPemasukan = 0;

if ($startDate && $endDate) {
    $laporan = getLaporanPemasukan($startDate, $endDate);
    $dataLaporan = $laporan['data'];
    $totalPemasukan = $laporan['total'];
}
?>
<link href="../assets/CSS/laporan_parkir.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../assets/CSS/style.css">

<div class="main-content">
    <header>
        <h2>Laporan Pemasukan <span>Control Panel</span></h2>
        <a href="../logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <!-- ruang kreasi developer -->
    <div class="container">
        <h1>Laporan Pemasukan Parkir</h1>

        <!-- Filter Laporan -->
        <div class="filter-box">
            <h2>Filter Laporan</h2>
            <form method="get" action="">
                <div class="form-group">
                    <label for="startDate">Mulai Tanggal</label>
                    <input type="date" id="startDate" name="startDate" required value="<?php echo htmlspecialchars($startDate); ?>">
                </div>
                <div class="form-group">
                    <label for="endDate">Sampai Tanggal</label>
                    <input type="date" id="endDate" name="endDate" required value="<?php echo htmlspecialchars($endDate); ?>">
                </div>
                <button type="submit">Tampilkan</button>
            </form>
        </div>

        <?php if (!empty($dataLaporan)): ?>
            <div class="report-box">
                <h2>Laporan</h2>
                <div class="date-range">
                    <p><strong>Dari Tanggal:</strong> <?php echo htmlspecialchars($startDate); ?></p>
                    <p><strong>Sampai Tanggal:</strong> <?php echo  htmlspecialchars($endDate); ?></p>
                </div>
                <button onclick="window.location.href='cetak_laporan.php?startDate=<?php echo htmlspecialchars($startDate); ?>&endDate=<?php echo htmlspecialchars($endDate); ?>'" class="pdf-button">Cetak PDF</button>


                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Plat</th>
                            <th>Pengemudi</th>
                            <th>Jenis Kendaraan</th>
                            <th>Waktu Masuk</th>
                            <th>Waktu Keluar</th>
                            <th>Durasi</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataLaporan as $index => $row): ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo htmlspecialchars($row['no_plat']); ?></td>
                                <td><?php echo htmlspecialchars($row['pengemudi']); ?></td>
                                <td><?php echo htmlspecialchars($row['id_kendaraan']); ?></td>
                                <td><?php echo date('d-m-Y H:i:s', strtotime(htmlspecialchars($row['waktu_masuk']))); ?></td>
                                <td><?php echo date('d-m-Y H:i:s', strtotime(htmlspecialchars($row['waktu_keluar']))); ?></td>
                                <td><?php echo htmlspecialchars($row['durasi']); ?></td>
                                <td>Rp <?php echo number_format($row['biaya'], 0, ',', '.'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="total">
                    <p><strong>Total Pemasukan:</strong> Rp <?php echo number_format($totalPemasukan, 0, ',', '.'); ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>