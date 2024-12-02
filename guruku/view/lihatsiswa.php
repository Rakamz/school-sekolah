<?php
require "../function/config.php";
require '../function/readdatasiswa.php';

require "../function/cek_user.php";
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKu | Lihat Siswa</title>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/lihatsiswa.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../asset/logo_smkn1banjar.png" type="image/x-icon">
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <style>
        nav{
            display: flex;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav>
    <div class="logo">
            <div class="logo-img-container">
                <img src="../asset/logo_smkn1banjar.png" alt="">
            </div>
            <div class="text-logo">
                <h2>GuruKu </h2>
            </div>
        </div>
        <div class="logout-container">
            <button class="phone-menu-button" id="phone-menu-button">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a href="../function/logout.php" class='func-logout dpnone'>
                <button class='btn-logout'>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </button>
            </a>
        </div>
    </nav>
    <!-- navbar -->

    <main class='lihat-siswa'>



        <!-- main content -->
        <div class="main-content">
            <div class="box-container">
                <div class="title">
                    <div class="title-main">
                        <h2>Biodata Siswa </h2>
                    </div>

                    <div class="button-container">
                        <?php  ?>
                        <a href="../function/downloadpdf.php?c_siswa=<?= $c_siswa ?>&c_kelas=<?= $c_kelas ?>" class='href_print'>
                            <button class='btn-print'>
                                <i class="fa-solid fa-file"></i>
                            </button>
                        </a>
                        <a href="editsiswa.php?c_siswa=<?php echo $c_siswa; ?>&c_kelas=<?php echo $c_kelas; ?>">
                            <button class='button-edit'>
                                <i class="fa fa-pencil"></i>
                                <p>Edit Siswa</p>
                            </button>
                        </a>
                        <a href="siswa.php?c_kelas=<?php echo $c_kelas; ?>">
                            <button class='button-class'>
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <p>Kembali Ke Kelas</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="top-wrapper">
                   
                    <div class="info-wrapper">
                        <?php while ($d = mysqli_fetch_assoc($result)) { ?>
                        <ul>
                            <li>
                                <h2>NISN :</h2>
                                <p><?php echo $d["nisn"] ?> </p>
                            </li>
                            <li>
                                <h2>Nama :</h2>
                                <p><?php echo $d["nama"] ?> </p>
                            </li>
                            <li>
                                <h2>Tanggal Lahir :</h2>
                                <p><?php echo $d["tanggal_lahir"] ?></p>
                            </li>
                            <li>
                                <h2>Tempat lahir :</h2>
                                <p><?php echo $d["alamat_lahir"] ?></p>
                            </li>
                            <li>
                                <h2>Jenis Kelamin :</h2>
                                <p><?php echo $d["jenis_kelamin"] ?></p>
                            </li>

                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>



        <!-- end main content -->
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
        });
    </script>
</body>

</html>