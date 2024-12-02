<?php
require "config.php";
session_start();
$nama = htmlspecialchars($_POST["input_nama"]);
$alamat = htmlspecialchars($_POST["alamat"]);
$email = htmlspecialchars( $_POST["input_email"]);
$status= htmlspecialchars( $_POST["input_status"]);
$id = rand(1000000,5000000);

mysqli_query($conn, "INSERT INTO guru VALUES('$id','$nama','$alamat','$email','$status')");

header("location:../view/guru.php");

//insert log
$curdate = date("Y-m-d H:i:s");
$c_logs = rand(40000, 80000);
$nama_akun = $_SESSION["nama_akun"];
mysqli_query($conn, "INSERT INTO logs VALUES('$c_logs','guru bernama $nama berhasil ditambah oleh $nama_akun','$curdate')");

?>