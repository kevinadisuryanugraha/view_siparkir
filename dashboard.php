<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Parking Dashboard</title>
    <link rel="stylesheet" href="assets/CSS/include_1.css?">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h2>Dashboard <span>Control Panel</span></h2>
                <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
            </header>

            <!-- Stats Cards -->
            <section class="stats-grid">
            <div class="card green">
                <div class="card-icon"><i class="fas fa-car"></i></div>
                <h3><?php echo total_kendaraan(); ?></h3>
                <p>Jenis Kendaraan</p>
            </div>

            <div class="card orange">
                <div class="card-icon"><i class="fas fa-user-plus"></i></div>
                <h3><?php echo total_user(); ?></h3>
                <p>Pengguna</p>
            </div>

            <div class="card blue">
                <div class="card-icon"><i class="fas fa-car-side"></i></div>
                <h3><?php echo total_kendaraan_masuk_hari_ini(); ?></h3>
                <p>Kendaraan Masuk Hari Ini</p>
            </div>

            <div class="card blue">
                <div class="card-icon"><i class="fas fa-car"></i></div>
                <h3><?php echo total_kendaraan_masuk_tahun_ini(); ?></h3>
                <p>Kendaraan Masuk Tahun Ini</p>
            </div>

            <div class="card green">
                <div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
                <h3>Rp <?php echo number_format(total_pemasukan_tahun_ini(), 0, ',', '.'); ?></h3>
                <p>Pemasukan Tahun Ini</p>
            </div>

            <div class="card green">
                <div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
                <h3>Rp <?php echo number_format(total_pemasukan(), 0, ',', '.'); ?></h3>
                <p>Total Pemasukan</p>
            </div>
        </section>

            <!-- Footer -->
            <?php include 'footer.php'; ?>
        </main>
    </div>