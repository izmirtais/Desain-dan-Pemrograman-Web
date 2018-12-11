<?php
require 'functions.php';
$informasi = query("SELECT * FROM informasi");

//  tombol cari ditekan
// cari pada line 7 adalah nama dari button
if(isset($_POST["cari"]))
{
    // cari line 10adalah function dan keyword adalah nama dari inputan text
    $informasi = cari($_POST["keyword"]);
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Daftar Registrasi User</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Data Registrasi User
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="home.php">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                <a href="formulir.php">
                        <i class="pe-7s-note2"></i>
                        <p>Formulir Biodata</p>
                    </a>
                </li>
                <li>
                <li class="active">
                <a href="data.php">
                        <i class="pe-7s-note2"></i>
                        <p>Data Registrasi</p>
                    </a>
                </li>
                <li>
                    <a href="registrasiuser.php">
                        <i class="pe-7s-users"></i>
                        <p>Registrasi User</p>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <i class="pe-7s-key"></i>
                        <p>Login</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Data Registrasi User</h4>
                                <form action="" method="post">
        <!-- autofocus atribut pada html 5 yang digunakan untuk memberikan tanda pertama kali ke inputan pada saat page di reload -->
        <!-- placeholder atribut yang digunakan untuk menampilkan tulisan pada textbox-->
        <!-- autocomplete digunakan agar history pencarian dari user lain tidak ada-->

        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari"> Cari </button>
    </form>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                                    </thead>
                                </table>
                                <?php $i=1 ?>
                                    <?php foreach ($informasi as $row):?>  
                                        <tr>
                                        <td><?= $i;?></td>
                                        <td><?= $row["Nama"];?></td>
                                        <td><?= $row["Username"];?></td>
                                        <td><?= $row["Email"];?></td>
                                        <td><?= $row["Alamat"];?></td>
                                        <td>
                                        <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                        <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
                                    </td>
                                </tr>
                            <?php $i++ ?>
                            <?php endforeach;?>

                            </div>
                        </div>
                </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
