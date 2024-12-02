<?php

require "config.php";
session_start();
$nip = $_GET["nip"];


//get user data
$result = mysqli_query($conn, "SELECT * FROM guru WHERE nip='$nip'");
$query = mysqli_fetch_assoc($result);
$nama = $query["nama"];

//insert logs
$curdate = date("Y-m-d H:i:s");
$c_logs = rand(40000, 80000);
$nama_akun = $_SESSION["nama_akun"];
mysqli_query($conn, "INSERT INTO logs VALUES('$c_logs','User bernama $nama berhasil dihapus oleh $nama_akun','$curdate')");


mysqli_query($conn, "DELETE FROM guru WHERE nip='$nip'");
header("location:../view/guru.php");
?>