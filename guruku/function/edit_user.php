<?php

require "config.php";
session_start();

$nama = htmlspecialchars($_POST["nama"]);
$alamat = htmlspecialchars($_POST["alamat"]);
$email = htmlspecialchars($_POST["email"]);
$status = htmlspecialchars($_POST["status"]);
$nip = $_GET["nip"];

$sql = "UPDATE guru SET nama='$nama',alamat='$alamat',email='$email',status='$status' WHERE nip='$nip'";
mysqli_query($conn,$sql);

//insert logs
$curdate = date("Y-m-d H:i:s");
$c_logs = rand(40000, 80000);
$nama_akun = $_SESSION["nama_akun"];
mysqli_query($conn, "INSERT INTO logs VALUES('$c_logs','User bernama $nama berhasil diedit oleh $nama_akun','$curdate')");

header("location:../view/guru.php");


?>