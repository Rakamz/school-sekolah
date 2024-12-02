<?php


require "../function/cek_user.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKu | Tambah Guru</title>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/kelas.css">
    <link rel="stylesheet" href="../css/addguru.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../asset/logo_smkn1banjar.png" type="image/x-icon">
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <style>
        .catatan {
            text-align:  -webkit-left;
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
                <h2>Guruku</h2>
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
                    <h2>Tambah Data Guru</h2>
                    <a href="guru.php">
                        <button class="button-add">
                            <i class="fa-solid fa-list"></i>
                            Lihat Guru
                        </button>

                    </a>
                </div>
            
                <!-- main INput -->
                <div class="input-container">
                    <form method="POST" action="../function/tambahguru.php">
                    <ul>
                        <li>
                            <label for="">Nama</label>
                            <input type="text" name="input_nama" id="">
                        </li>
                        <li>
                            <label for="">alamat</label>
                            <input type="text" name="alamat" id="">
                        </li>
                        <li>
                            <label for="">email</label>
                            <input type="email" name="input_email" id="">
                        </li>
                        <li>
                            <label for="">status</label>
                            <input type="status" name="input_status" id="">
                        </li>
                        <li>
                            <input type="submit" value="Tambah Guru" class="btn-tambah">
                        </li>
                        
                    </ul>
                    </form>
                    <div class="catatan">
                        <h3>* Catatan Untuk Status:</h3>
                        <h5>1.Guru Honorer(GH)</h5>
                        <h5>2.Guru Pegawai Negeri Sipil(PNS)</h5>
                        <h5>3.Guru Tidak Tetap(GTT)</h5>
                        <h5>4.Guru Tugas Khusus(GTK)</h5>
                        <h5>5.Guru Kontrak</h5>
                        <h5>6.Guru Dosen</h5>
                        <h5>7.Guru Swasta</h5>
                    </div>
                </div>


                <!-- end main input -->


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
        });
    </script>
</body>

</html>