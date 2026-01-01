<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name= "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name= "password" type="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            $pass = md5($_POST['password']);

            require 'koneksi.php';
            //cek credentials user
            $ceklogin = "SELECT * FROM pengguna WHERE email='$email' AND password='$pass'";
            $result = $koneksi->query($ceklogin);

            if ($result->num_rows> 0) {
                //echo "login berhasil";
                session_start();
                $_SESSION['login'] = TRUE;
                $_SESSION['email'] = $email;
                header("Location: index.php");
            } else {
                echo "Login gagal";
            }
        }
        ?>
    </div>
</body>
</html>