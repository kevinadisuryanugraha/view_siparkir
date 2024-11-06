<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link href="../assets/CSS/dashboard.css" rel="stylesheet" type="text/css">
<link href="../assets/CSS/change-password.css" rel="stylesheet" type="text/css">
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
        transition: background-color 0.3s ease, transform 0.2s ease;
        font-weight: bold;
    }

    .logout-btn:hover {
        background-color: #1b9e40;
        transform: scale(1.05);
    }

    /* Change Password Form */
    .change-password-card {
        max-width: 500px;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
    }

    .change-password-card h3 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    .change-password-card label {
        font-size: 14px;
        color: #333;
        display: block;
        margin-bottom: 8px;
    }

    .change-password-card input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .change-password-card .pure-button-primary {
        width: 100%;
        padding: 10px;
        background-color: #1b5e20;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .change-password-card .pure-button-primary:hover {
        background-color: #1b9e40;
    }
</style>

<div class="main-content">
    <header>
        <h2>Ganti Password <span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    

    <div class="change-password-card">
        <h3>Ganti Password</h3>
        <form class="pure-form pure-form-stacked" action="#" method="post">
            <label for="current_password">Password Saat Ini</label>
            <input type="password" name="current_password" id="current_password" required>

            <label for="new_password">Password Baru</label>
            <input type="password" name="new_password" id="new_password" required>

            <label for="confirm_password">Konfirmasi Password Baru</label>
            <input type="password" name="confirm_password" id="confirm_password" required>

            <button type="submit" class="pure-button pure-button-primary">Ganti Password</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>