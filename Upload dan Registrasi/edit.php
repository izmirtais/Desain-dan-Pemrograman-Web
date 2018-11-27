<?php
    require 'functions.php';
    // cek apakah button submit sudah di tekan atau belum
    if(isset($_POST['submit']))
    {
        //cek sukses data dirubah menggunakan function edit pada functions.php
        if(edit($_POST)>0)
        {
            echo "
            <script>
                alert('data berhasil diperbaharui');
                document.location.href='index.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal diperbaharui');
                document.location.href='edit.php';
            </script>";
            echo "</br>";
            echo mysqli_error($conn);
        }
    }
?>

<?php
    // ke dalam variabel baru yaitu $id
    $id=$_GET["id"];
    // var_dump("$id");

    //query berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];
    // var_dump($mhs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data</title>
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
            <a class="navbar-brand" href="#"><img src="img/polinema.jpg" width="120" height="120" class="logo"></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Daftar Mahasiswa</a></li>
                <li><a href="tambah.php">Tambah Data Mahasiswa</a></li>
                <li class="active"><a href="edit.php">Update Data Mahasiswa</a></li>
                <li><a href="registrasi.php">Registrasi</a></li>
            </ul>
    </nav>

    <h1 align=center>Update Data Mahasiswa</h1>
    <center><h5> SELAMAT DATANG DI WEB POLITEKNIK NEGERI MALANG </h5></center>
    <table align=center>
    <form action="" method="post">
 
    <li>
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    </li>
    
    <ul>
        <tr>
                <!--  for pada label terhubung dengan id jadi jika label nama diklik maka textfield nama akan aktif juga-->
                <td><label for="Nama">Nama</label></td>
                <!-- untuk pengisian name besar ekcilnya harus sesuai dengan fieldnya-->
                <td><input type="text" name="Nama" id="Nama" value="<?= $mhs["Nama"]; ?>"></td>
        </tr>
        <tr>        
            <td><label for="Nim">Nim</label></td>
            <td><input type="text" name="Nim" id="Nim" required value="<?= $mhs["Nim"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="Email">Email</label></td>
            <td><input type="text" name="Email" id="Email" required value="<?= $mhs["Email"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="Jurusan">Jurusan</label></td>
            <td><input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs["Jurusan"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="Gambar">Gambar</label></td>
            <td><input type="file" name="Gambar" id="Gambar" required value="<?= $mhs["Gambar"]; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit"> Update </button></td>
        </tr>
        </ul>
        </form>  
</body>
</html>