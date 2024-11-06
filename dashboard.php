<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'functions.php';?>
<link rel="stylesheet" href="assets/CSS/style.css">
<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    

    <!-- ruang kreasi developer -->
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
    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>