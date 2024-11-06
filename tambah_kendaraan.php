<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis Kendaraan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/tambah_kendaraan.css">
    <link rel="stylesheet" href="assets/CSS/include_1.css">
</head>

<body>
    <div class="dashboard">
        <?php include_once "sidebar.php" ?>
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
                <button type="button" class="btn-cancel"
                    onclick="window.location.href='jenis_kendaraan.php'">Batal</button>
            </form>
        </div>
    </div>
</body>

</html>