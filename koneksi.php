<?php 

$host = "localhost";
$user = "root";
$pass = "";
$name = "uasweb";

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
$db_select = mysqli_select_db($koneksi, "uasweb");
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($koneksi));
    die('Internal server error');
}

?>