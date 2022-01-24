<?php
// date_default_timezone_get("Asia/Jakarta");

require 'function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo
        "<script> alert ('data berhasil di tambah');
        document.location.href = 'index.php';
        </script>";
    } else {
        "<script> alert ('data gagal di tambah');
        </script>";
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet">

    <title>CRUD</title>
</head>

<body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIPEMABA || Kampus Kita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <div class="text-white">
                    <?php echo date('l, d-m-y'); ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- sidebar -->
    <div class="row mt-4">
        <div class="col-md-2  mt-2 pr-3 pt-4 " style=" background-color: #e3f2fd;">
            <!-- menu -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-black" aria-current="page" href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="index.php"><i class="fas fa-users"></i> Calon Mahasiswa</a>
                    <hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#"><i class="fas fa-user-edit"></i> Input Camaba</a>
                    <hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
                    <hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#"><i class="far fa-calendar-alt"></i> Jadwal Kuliah</a>
                    <hr class="bg-dark">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-5">
            <!-- konten -->
            <h3><i class="fas fa-users"></i> Input Calon Mahasiswa </h3>
            <hr>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama : </label>
                    <input type="text" class="form-control" id="nama" placeholder="nama lengkap" name="nama" autofocus required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat : </label>
                    <input type="text" class="form-control" id="alamat" placeholder="alamat lengkap" name="alamat" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin : </label>
                    <input type="text" class="form-control" id="jk" placeholder="Jenis Kelamin" name="jenis_kelamin" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama : </label>
                    <input type="text" class="form-control" id="agama" placeholder="Agama anda" name="agama" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="as" class="form-label">Asal Sekolah : </label>
                    <input type="text" class="form-control" id="as" placeholder="Asal Sekolah anda" name="sekolah-asal" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="fm" class="form-label">Foto maba : </label>
                    <input type="text" class="form-control" id="fm" placeholder="input foto anda" name="foto_maba" required autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
            </form>

        </div>
    </div>

    <!-- end navbar-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>