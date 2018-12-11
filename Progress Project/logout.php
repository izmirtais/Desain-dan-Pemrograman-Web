<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['hak_akses']);
session_destroy();
    header("Location:login-multiuser-php-mysql.php");
?>