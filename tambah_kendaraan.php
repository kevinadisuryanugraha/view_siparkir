<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link href="assets/CSS/edit_jenis_kendaraan.css" rel="stylesheet" type="text/css">
<!DOCTYPE html>
<html lang="en">

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
        transition: background-color 0.3s ease, transform 0.2s ease; /* Menambahkan efek transisi */
        font-weight: bold; /* Menebalkan teks */
    }

    .logout-btn:hover {
        background-color: #1b9e40; /* Mengubah warna saat hover */
        transform: scale(1.05); /* Sedikit memperbesar tombol saat hover */
    }

    /* Stats Cards */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* Tiga kolom */
        gap: 15px; /* Jarak antar kartu */
        margin-bottom: 20px;
    }

    .card {
        background-color: #e3f2fd; /* Warna latar belakang untuk kartu */
        padding: 20px;
        border-radius: 8px;
        position: relative;
        color: #333;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease; /* Transisi saat hover */
    }

    .card:hover {
        transform: scale(1.05); /* Memperbesar kartu saat hover */
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
    .green { background-color: #c8e6c9; }
    .orange { background-color: #ffe0b2; }
    .blue { background-color: #bbdefb; }

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
        <h2>Tambah <span>Jenis kendaraan</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    

    <!-- ruang kreasi developer -->
    <div class="container">
        <h1>Tambah Jenis Kendaraan</h1>
        <form action="proses_tambah_jenis_kendaraan.php" method="POST">
            <div class="form-group">
                <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" required>
            </div>
            <div class="form-group">
                <label for="biaya">Biaya/jam:</label>
                <input type="text" id="biaya" name="biaya" required>
            </div>
            <button type="submit" class="btn-submit">Simpan</button>
            <button type="button" class="btn-cancel" onclick="window.location.href='jenis_kendaraan.php'">Batal</button>
        </form>
    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>
  
</body>

</html>
