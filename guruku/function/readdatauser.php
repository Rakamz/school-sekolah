<?php

$nip = $_GET["nip"];

$resultuser = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$nip'");

?>