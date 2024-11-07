<?php 
    require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CETAK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 50px;
            margin: 0;
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border: solid 2px #DDEEEE; 
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        thead {
            border: solid 1px #DDEEEE;
        }

        th, td {
            border: solid 1px #DDEEEE; 
            padding: 12px;
            text-align: left;
            font-size: 16px;
            color: #555;
        }

        th {
            font-weight: bold;
            text-align: center;
        }


        td {
            vertical-align: middle;
        }

        @media print {
            body {
                padding: 0;
            }
            table {
                border: solid 1px #000;
            }
            th, td {
                border: solid 1px #000; 
            }
        }
    </style>
</head>
<body>

    <center>
        <h2>DATA LAPORAN Kendaraan</h2>
    </center>

    <table id="example" class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>No Plat</th>
                <th>Pengemudi</th>
                <th>Jenis Kendaraan</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Durasi</th>
                <th>Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT 
                        t.id AS transaksi_id,
                        t.no_plat, 
                        t.pengemudi, 
                        k.jenis_kendaraan, 
                        t.waktu_masuk, 
                        t.waktu_keluar, 
                        t.durasi, 
                        t.biaya
                    FROM siparkir_transaksi AS t
                    JOIN siparkir_kendaraan AS k ON t.id_kendaraan = k.id
                ";
                
                $result = $db->query($query);
                $no = 1;

                // Periksa apakah hasil ada
                if ($result && $result->num_rows > 0) {
                    // Fetch data baris per baris
                    while($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo htmlspecialchars($row['no_plat']); ?></td>
                <td><?php echo htmlspecialchars($row['pengemudi']); ?></td>
                <td><?php echo htmlspecialchars($row['jenis_kendaraan']); ?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($row['waktu_masuk'])); ?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($row['waktu_keluar'])); ?></td>
                <td><?php echo htmlspecialchars($row['durasi']); ?></td>
                <td>Rp <?php echo number_format($row['biaya'], 0, ',', '.'); ?></td>
            </tr>
            <?php  
                    endwhile; 
                } else {
                    echo "<tr><td colspan='8'>Tidak ada data yang tersedia.</td></tr>";
                }
            ?>
        </tbody>
    </table>

    <script>
        window.print();
    </script>

</body>
</html>
