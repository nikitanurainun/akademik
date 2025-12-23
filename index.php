<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <a class="navbar-brand" href="#"><h3>Akademik</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=mahasiswa">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=prodi">Program Studi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class = "container my-4">
       <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            switch ($page) 
            {
                case 'home':
                    include 'home.php';
                    break;
                case 'mahasiswa':
                    include 'mahasiswa/list.php';
                    break;
                case 'mahasiswa_create':
                    include 'mahasiswa/create.php';
                    break;
                case 'mahasiswa_update':
                    include 'mahasiswa/edit.php';
                    break;
                case 'prodi':
                    include 'prodi/list.php';
                    break;
                case 'prodi_create':
                    include 'prodi/create.php';
                    break;
                case 'prodi_update':
                    include 'prodi/edit.php';
                    break;
                default:
                    include 'home.php';
            }
       ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>