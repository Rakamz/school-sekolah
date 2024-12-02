<?php
require "../function/config.php";
require "../function/readpoin.php";

$c_siswa = $_GET['c_siswa'];
$c_kelas = $_GET['c_kelas'];

require "../function/config.php";
require "../function/cek_user.php";
//jika tombol submit ditekan
/* if(isset($_POST["input_submit"])){
    
    $poin_input = $_POST["poin_input"];
    $pelanggaran_input = $_POST["pelanggaran_input"];
    $tanggal_input = $_POST["tanggal_input"];
    $c_siswa = $_GET["c_siswa"];
    $c_kelas = $_GET['c_kelas'];
    $id_history = rand(20000, 30000);

    $result = mysqli_query($conn, "SELECT * FROM siswa WHERE c_siswa='$c_siswa'");


    $nama_siswa = '';
    while($d = mysqli_fetch_assoc($result)){
        if($c_siswa == $d['c_siswa']){
            $nama_siswa = $d['nama'];
        }
    }


    $sql = "UPDATE siswa SET poin=poin+$poin_input WHERE c_siswa='$c_siswa'";
    $sql2 = "INSERT INTO history VALUES('$nama_siswa','$pelanggaran_input','$poin_input','$tanggal_input','$id_history','$c_siswa') ";
    $sql3 = "UPDATE kelas SET pelanggaran=pelanggaran+1 WHERE c_kelas='$c_kelas'";
    $sql4 = "UPDATE kelas SET poin=poin+$poin_input WHERE c_kelas='$c_kelas'";
    $sql5 = "UPDATE siswa SET pelanggaran=pelanggaran+1 WHERE c_siswa='$c_siswa'";


    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
    mysqli_query($conn, $sql3);
    mysqli_query($conn, $sql4);
    mysqli_query($conn, $sql5);

    header("location:../view/history.php");
} */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKu |Data Siswa</title>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/kelas.css">
    <link rel="stylesheet" href="../css/poin.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../asset/logo_smkn1banjar.png" type="image/x-icon">
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <!-- navbar -->
    <nav>
    <div class="logo">
            <div class="logo-img-container">
                <img src="../asset/logo_smkn1banjar.png" alt="">
            </div>
            <div class="text-logo">
                <h2>GuruKu</h2>
            </div>
        </div>
        <div class="logout-container">
            <button class="phone-menu-button" id="phone-menu-button">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a href="../function/logout.php" class='func-logout'>
                <button class='btn-logout dpnone'>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </button>
            </a>
        </div>
    </nav>
    <!-- navbar -->

    <main>
        <!-- main content -->
        <div class="main-content">
            <div class="box-container">
                <div class="title-box">
                    <h2>Data Siswa</h2>
                </div>
                <div class="main-table">
                    <table id="tablepagination" class="table table-striped tablepagination" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($d = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $d["nisn"] ?></td>
                                <td><?php echo $d["nama"] ?></td>
                                <td>                  
                                    <?php echo $d["nama_kelas"] ?>
                                </td>
                            </tr>  
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
                        <div class="input-items3">
                            <a href="pelanggaran.php">
                        <input type="submit" name="input_submit" value="Selesai" class="btn-done">
                        </a>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- main content -->

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../js/poin.js"></script>
    <script src="../js/menu.js"></script>
    <script type="text/javascript" charset="utf-8">
        $.noConflict();
        $(document).ready(function() {
            $('.tablepagination').DataTable();
        });
    </script>
</body>

</html>