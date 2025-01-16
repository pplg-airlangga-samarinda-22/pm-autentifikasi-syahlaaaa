<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $_SESSION['id_petugas'] = $_POST['id_petugas'];
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <form action="" method="post" class="form-login">
        <h2>Silahkan Login</h2>
        <div class="form-item">
            <label for="id_petugas">Id Petugas</label>
            <input type="text" name="id_petugas" id="id_petugas" required>
        </div>
        <div class="form-item">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-item">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
        <a href="register_admin.php">Register</a>
    </form>
</body>
</html>