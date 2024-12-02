<?php
$account = "SELECT * FROM user";
$result1 = mysqli_query($conn, $account);

$kelas = "SELECT * FROM kelas";
$result2 = mysqli_query($conn, $kelas);

$sql2 = "SELECT * FROM siswa";
$result3 = mysqli_query($conn,$sql2)


?>