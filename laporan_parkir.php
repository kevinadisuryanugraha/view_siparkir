<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemasukan</title>
    <link rel="stylesheet" href="assets/CSS/laporan_parkir.css">
    <link rel="stylesheet" href="assets/CSS/include_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="dashboard">
        <?php include_once "sidebar.php" ?>
        <div class="container">
            <h1 class="">LAPORAN PEMASUKAN <span class="sub-title">Data Laporan Pemasukan</span></h1>

            <div class="filter-box">
                <h2>Filter Laporan</h2>
                <form>
                    <div class="form-group">
                        <label for="startDate">Mulai Tanggal</label>
                        <input type="date" id="startDate" name="startDate">
                    </div>
                    <div class="form-group">
                        <label for="endDate">Sampai Tanggal</label>
                        <input type="date" id="endDate" name="endDate">
                    </div>
                    <button type="submit">Tampilkan</button>
                </form>
            </div>

            <div class="report-box">
                <h2>Laporan</h2>
                <div class="date-range">
                    <p><strong>Dari Tanggal:</strong> 2023/06/01</p>
                    <p><strong>Sampai Tanggal:</strong> 2023/06/30</p>
                </div>
                <button class="pdf-button">Cetak PDF</button>

                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
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
                        <tr>
                            <td>1</td>
                            <td>PARKR1</td>
                            <td>B 8798 KIU</td>
                            <td>-</td>
                            <td>Sport</td>
                            <td>10-06-2023 14:44:09</td>
                            <td>13-06-2023 14:51:52</td>
                            <td>71 jam, 31 menit, 43 detik</td>
                            <td>Rp 3,600,000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>PARKR2</td>
                            <td>B 8988 JJ</td>
                            <td>-</td>
                            <td>Sepeda Motor</td>
                            <td>10-06-2023 14:44:09</td>
                            <td>13-06-2023 14:00:03</td>
                            <td>71 jam, 15 menit, 54 detik</td>
                            <td>Rp 360,000</td>
                        </tr>
                    </tbody>
                </table>

                <div class="total">
                    <p><strong>Total:</strong> Rp 4,450,000</p>
                </div>
            </div>
            <?php include_once "footer.php" ?>
        </div>
    </div>
</body>

</html>