<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
    <link rel="stylesheet" href="assets/CSS/edit_user.css">
    <link rel="stylesheet" href="assets//CSS//include_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include_once "sidebar.php"; ?>
    <div class="container">
        <h2>Edit User</h2>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" value="Toni Jakasogi" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" value="Admin" required>
            </div>
            <div class="form-group">
                <label>User Level</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" name="level" id="admin" checked required>
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
                    <label>Choose New File<input type="file" accept="image/*"></label>
                </div>
                <div class="current-image">Current: profile.jpg</div>
            </div>
            <div class="form-buttons">
                <button type="submit">Save Changes</button>
                <a href="daftar_pengguna.php" class="cancel-button">Cancel</a>
            </div>
        </form>
        <?php include_once "footer.php"; ?>
    </div>
</body>

</html>