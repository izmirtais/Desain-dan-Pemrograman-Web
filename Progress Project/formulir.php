<?php
    // buat koneksi
    $conn = mysqli_connect("localhost","root","","databases");

    // cek apakah button submit sudah di tekan atau belum
    if(isset($_POST['submit']))
    {
        
        //cek isi dari post menggunakan vardump
        // var_dump($_POST);
        // var_dump($_FILES);
        // die();

        // ambil data dari tiap element dalam form yang disimpan di variabel baru
        $nama = $_POST["Nama"];
        $username = $_POST["Nim"];
        $email = $_POST["Email"];
        $alamat = $_POST["Alamat"];

        // query insert data
        $query = " INSERT INTO informasi
                    VALUES
                    ('','$nama','$username','$email','$alamat')";
        mysqli_query($conn,$query);

        // cek sukses data ditambah menggunakan mysqli_affected_rows
        // jika kita var_dump maka akan muncul int(1) jika gagal maka akan muncul int (-1)
        // var_dump(mysqli_affected_rows($conn));
        if(mysqli_affected_rows($conn) > 0) {
            echo "
            <script>
        alert('data berhasil disimpan');
        document.location.href = 'registrasiuser.php';
        </script>
        ";
        }
        else {
            echo "
            <script>
            alert('data gagal disimpan');
            document.location.href = 'formulir.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Formulir Biodata</title>

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
                    Perpustakaan
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="home.php">
                        <i class="pe-7s-graph"></i>
                        <p>TentangKu</p>
                    </a>
                </li>
                <li>
                <li class="active">
                <a href="formulir.php">
                        <i class="pe-7s-note2"></i>
                        <p>Formulir Biodata</p>
                    </a>
                </li>
                <li>
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
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Formulir Biodata</h4>
                            </div>
                            <div class="content">
                                <table align=center>
                                    <form action="" method="post">
                                <tr>
                <!--  for pada label terhubung dengan id jadi jika label nama diklik maka textfield nama akan aktif juga-->
                <td><label for="ID">ID</label></td>
                <!-- untuk pengisian name besar ekcilnya harus sesuai dengan fieldnya-->
                <td><input type="text" name="Nama" id="Name"></td>
        </tr>
        <tr>        
            <td><label for="Nama">Nama</label></td>
            <td><input type="text" name="Nama" id="Nama" required></td>
        </tr>
        <tr>
            <td><label for="Username">Username</label></td>
            <td><input type="text" name="Username" id="Username" required></td>
        </tr>
        <tr>
            <td><label for="Email">Email</label></td>
            <td><input type="text" name="Email" id="Email" required></td>
        </tr>
        <tr>
            <td><label for="Alamat">Alamat</label></td>
            <td><input type="text" name="Alamat" id="Alamat"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit"> Tambah </button></td>
                                </form>
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
