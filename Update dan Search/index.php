<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari ditekan 
//cari pada line 7 adalah name dari button
if(isset($_POST["cari"]))
{
    //cari line 10 adalah function cari dan keyword adalah name dari inputan text
    $mahasiswa=cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <li class="active"><a href="index.php">Daftar Mahasiswa</a></li>
                <li><a href="tambah_data.php">Tambah Data Mahasiswa</a></li>
                <li><a href="edit.php">Update Data Mahasiswa</a></li>
            </ul>
    </nav>

    <h1 align="center"> Daftar Mahasiswa </h1>    
    <table border ="1" cellpadding="15" width="60%" align=center>
    <center><h5> SELAMAT DATANG DI WEB POLITEKNIK NEGERI MALANG </h5></center>
    <form action="" method="post">
    <center> <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off" ></center>
    <center> <button type="submit" name=cari>cari</button> <center>
    </form>
    <br>

    <tr align="center">
        <th>No.</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Gambar</th>
        <th>Aksi</th>
</tr>
<?php $i=1 ?>
<?php foreach ($mahasiswa as $row):?>  
<tr>
    <td><?= $i;?></td>
    <td><?= $row["Nama"];?></td>
    <td><?= $row["Nim"];?></td>
    <td><?= $row["Email"];?></td>
    <td><?= $row["Jurusan"];?></td>
    <td>
    <img src="img/<?php echo $row["Gambar"]; ?>" alt="" heigth="200" width="100" srcset=""></td>
    <td>
        <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
        <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
</td>
</tr>
<?php $i++ ?>
<?php endforeach;?>

</body>
</html>