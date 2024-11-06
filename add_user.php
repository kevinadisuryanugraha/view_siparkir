<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/add_user.css">
    <link rel="stylesheet" href="assets/CSS/include_1.css">
</head>

<body>
    <?php include_once "sidebar.php" ?>
    <div class="container">
        <h2>Add New User</h2>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" name="level" id="admin" required>
                        <label for="admin">Administrator</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" name="level" id="operator" required>
                        <label for="operator">Operator</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Profile Picture</label>
                <div class="file-input">
                    <label>Choose File<input type="file" accept="image/*"></label>
                </div>
            </div>
            <div class="form-buttons">
                <button type="submit">Add User</button>
                <a href="daftar_pengguna.php" class="cancel-button">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>