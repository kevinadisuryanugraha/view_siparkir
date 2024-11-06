<?php
include 'header.php'; 
include 'sidebar.php'; 

include 'functions.php';

if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = (int) $_GET['id'];

    if ($action == 'hapusKendaraan') {
        hapusKendaraan($id);
        echo "<script>alert('Data kendaraan berhasil dihapus.');</script>";
    } elseif ($action == 'batalKeluar') {
        batalKeluar($id);
        echo "<script>alert('Batal keluar berhasil.');</script>";
    }

    echo "<script>window.location.href = 'siparkir_kendaraan_keluar.php';</script>"; // Updated URL
}
?>

<link rel="stylesheet" href="assets/CSS/siparkir_kendaraan_keluar.css">
<link rel="stylesheet" href="assets/CSS/style.css">

<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
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
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dataKendaraan = getDataKendaraan();
                $no = 1;
                foreach ($dataKendaraan as $kendaraan) {
                    echo "<tr>";
                    echo "<td>{$no}</td>";
                    echo "<td>{$kendaraan['no_plat']}</td>";
                    echo "<td>{$kendaraan['pengemudi']}</td>";
                    echo "<td>{$kendaraan['id_kendaraan']}</td>"; // Pastikan ini sesuai dengan kolom di database
                    echo "<td>{$kendaraan['waktu_masuk']}</td>";
                    echo "<td>{$kendaraan['waktu_keluar']}</td>";
                    echo "<td>{$kendaraan['durasi']}</td>";
                    echo "<td>{$kendaraan['biaya']}</td>";
                    echo "<td class='button'>";

                    // Menambahkan tombol Lihat PDF
                    if (!empty($kendaraan['file_pdf'])) { // Ganti 'file_pdf' dengan nama kolom yang sesuai
                        echo "<button class='btn btn-success' onclick='window.open(\"" . htmlspecialchars($kendaraan['file_pdf']) . "\", \"_blank\")'>
                                <i class='fa-solid fa-file'></i> Lihat PDF
                              </button>";
                    } else {
                        echo "<p>No File</p>";
                    }

                    echo "<button class='btn btn-warning' onclick='confirmAction(\"batalKeluar\", {$kendaraan['id']})'>
                            <i class='fa-solid fa-xmark'></i> Batal
                          </button>";
                    echo "<button class='btn btn-danger' onclick='confirmAction(\"hapusKendaraan\", {$kendaraan['id']})'>
                            <i class='fa-solid fa-trash-can'></i> Hapus
                          </button>";
                    echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
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