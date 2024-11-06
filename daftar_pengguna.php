<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/daftar_pengguna.css">
    <link rel="stylesheet" href="assets/CSS/include_1.css">
</head>

<body>
    <div class="dashboard">
        <?php include_once "sidebar.php"; ?>
        <div class="container">
            <h2>Daftar Pengguna</h2>
            <div class="header">
                <a href="add_user.php" class="add-button">+ Tambah Pengguna Baru</a>
                <div class="search">
                    <input type="text" id="search" placeholder="Cari pengguna...">
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>USERNAME</th>
                        <th>LEVEL</th>
                        <th>FOTO</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Toni Jakasogi</td>
                        <td>admin</td>
                        <td>administrator</td>
                        <td>
                            <div class="user-photo">👤</div>
                        </td>
                        <td>
                            <a href="edit_user.php" class="edit-btn">🛠️ Edit</a>
                            <button class="delete-btn">🗑️ Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tia Larasati</td>
                        <td>operator1</td>
                        <td>operator</td>
                        <td>
                            <div class="user-photo">👤</div>
                        </td>
                        <td>
                            <a href="edit_user.php" class="edit-btn">🛠️ Edit</a>
                            <button class="delete-btn">🗑️ Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>