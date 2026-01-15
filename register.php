<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4" style="width: 350px;">
        <h4 class="text-center mb-3">Register</h4>
            <form method="POST">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="register" class="btn btn-primary w-100">
                    Daftar
                </button>
            </form>
            <p class="text-center mt-3">
                Sudah punya akun?
                <a href="login.php" class="fw-bold text-decoration-none">Login</a>
            </p>
    </div>
</div>
<?php
// koneksi database
require 'koneksi.php';

// proses register
if (isset($_POST['register'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    // simpan ke database
    $query = "INSERT INTO pengguna (nama_lengkap, email, password)
              VALUES ('$nama_lengkap', '$email', '$pass')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Registrasi berhasil!');
                window.location='login.php';
              </script>";
    } else {
        echo "<script>alert('Registrasi gagal');</script>";
    }
}
?>

</body>
</html>