<?php
    // buat koneksi
    $conn = mysqli_connect("localhost","root","","phpdatabase");

    // cek apakah button submit sudah di tekan atau belum
    if(isset($_POST['submit']))
    {
        
        //cek isi dari post menggunakan vardump
        // var_dump($_POST);
        // var_dump($_FILES);
        // die();

        // ambil data dari tiap element dalam form yang disimpan di variabel baru
        $nama = $_POST["Nama"];
        $nim = $_POST["Nim"];
        $email = $_POST["Email"];
        $jurusan = $_POST["Jurusan"];
        $gambar = $_POST["Gambar"];

        // query insert data
        $query = " INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nim','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);

        // cek sukses data ditambah menggunakan mysqli_affected_rows
        // jika kita var_dump maka akan muncul int(1) jika gagal maka akan muncul int (-1)
        // var_dump(mysqli_affected_rows($conn));
        if(mysqli_affected_rows($conn) > 0) {
            echo "
            <script>
        alert('data berhasil disimpan');
        document.location.href = 'index.php';
        </script>
        ";
        }
        else {
            echo "
            <script>
            alert('data gagal disimpan');
            document.location.href = 'index.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="#">
                <img src="img/polinema.jpg" width="140" height="140" class="logo">
            </a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Daftar Mahasiswa</a></li>
                <li class="active"><a href="tambah.php">Tambah Data Mahasiswa</a></li>
                <li><a href="edit.php">Update Data Mahasiswa</a></li>
                <li><a href="registrasi.php">Registrasi</a></li>
            </ul>
    </nav>

    <h1 align=center>Tambah Data Mahasiswa</h1>
    <center><h5> SELAMAT DATANG DI WEB POLITEKNIK NEGERI MALANG </h5></center>
    <table align=center>
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
                <!--  for pada label terhubung dengan id jadi jika label nama diklik maka textfield nama akan aktif juga-->
                <td><label for="Nama">Nama</label></td>
                <!-- untuk pengisian name besar ekcilnya harus sesuai dengan fieldnya-->
                <td><input type="text" name="Nama" id="Name"></td>
        </tr>
        <tr>        
            <td><label for="Nim">Nim</label></td>
            <td><input type="text" name="Nim" id="Nim" required></td>
        </tr>
        <tr>
            <td><label for="Email">Email</label></td>
            <td><input type="text" name="Email" id="Email" required></td>
        </tr>
        <tr>
            <td><label for="Jurusan">Jurusan</label></td>
            <td><input type="text" name="Jurusan" id="Jurusan" required></td>
        </tr>
        <tr>
            <td><label for="Gambar">Gambar</label></td>
            <td><input type="file" name="Gambar" id="Gambar"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit"> Tambah </button></td>
        </tr>
        </form>  
</body>
</html>