<?php
require "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $level = $_POST['level'];

    $sql = "INSERT INTO petugas (nama_petugas, username, password, telp, level) VALUES (?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssss", $nama_petugas, $username, $password, $telp, $level);

    if ($stmt->execute()) {
        echo "<script>alert('Petugas berhasil ditambahkan'); window.location.href='admin_login.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan petugas');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Petugas Baru</title>
</head>
<body>
    <h2>Tambah Petugas Baru</h2>
    <form action="" method="post">
        <div class="form-item">
            <label for="nama_petugas">Nama Petugas</label>
            <input type="text" name="nama_petugas" id="nama_petugas" required>
        </div>
        <div class="form-item">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-item">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-item">
            <label for="telp">Telepon</label>
            <input type="text" name="telp" id="telp" required>
        </div>
        <div class="form-item">
            <label for="level">Level Petugas</label>
            <select name="level" id="level" required>
                <option value="">Pilih Level</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
        </div>
        <button type="submit">Register</button>
        <a href="admin_login.php">
            <button type="button">Batal</button>
        </a>
    </form>
</body>
</html>