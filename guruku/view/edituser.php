<?php
require "../function/config.php";
require "../function/readguru.php";

require "../function/cek_user.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKu | Guru</title>
    <link rel="shortcut icon" href="../asset/logo_smkn1banjar.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/kelas.css">
    <link rel="stylesheet" href="../css/edituser.css">
    <link rel="stylesheet" href="../css/responsive.css">
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
                    <h2>Edit Guru</h2>
                    <a href="guru.php">
                        <button class="button-add">
                             <i class="fa-solid fa-xmark"></i>
                            Batalkan
                        </button>
                    </a>
                </div>
                
                <div class="main-table">
                   <ul>
                    <?php 
                        $nip = $_GET["nip"];
                        $sql2 = "SELECT * FROM guru WHERE nip='$nip'";
                        $result2 = mysqli_query($conn,$sql2 );  
                    ?>
                    <?php while($d = mysqli_fetch_assoc($result2)): ?>
                    <form action="../function/edit_user.php?nip=<?= $nip ?>" method="post">
                        <li>
                            <h2>Nama</h2>
                            <input type="text" name="nama" id="" value="<?= $d["nama"] ?>">
                        </li>
                        <li>
                            <h2>alamat</h2>
                            <input type="text" name="alamat" id="" value="<?= $d["alamat"] ?>">
                        </li>
                        <li>
                            <h2>email</h2>
                            <input type="text" name="email" id="" value="<?= $d["email"] ?>">
                        </li>
                        <li>
                        <h2>status</h2>
                            <input type="text" name="status" id="" value="<?= $d["status"] ?>">
                        </li>
                        <li>
                            <input type="submit" value="Selesai" name='btn_submit'>
                        </li>
                    </form>
                    <?php endwhile ?>
                   </ul>
                </div>
            </div>
        </div>
        <!-- main content -->

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../js/menu.js"></script>
  
    <script type="text/javascript" charset="utf-8">
        $.noConflict();
        $(document).ready(function() {
            $('.tablepagination').DataTable();
        } );
    </script>
</body>

</html>