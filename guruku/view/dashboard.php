<?php
require "../function/config.php";
require "../function/readdatadasboard.php";

require "../function/cek_user.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKu | Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../asset/logo_smkn1banjar.png" type="image/x-icon">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <style>
        .main-content h1{
            font-family:auto;
            color:#0d6efd;
        }
        .swiper {
      width: 100%;
      height: 80%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 80%;
      object-fit: cover;
    }

    .swiper-slide p{
        text-align: center;
        position: absolute;
        font-style:italic;
        font-size: 25px;
        color:azure;
    }

    </style>
</head>
<body>
    <!-- navbar -->
    <nav>
    <header>
        <div class="header-left">
            <div class="logo">
                <img src="../asset/logo_smkn1banjar.png" alt="" class="logo-nav">
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="" class="active">Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Input Data</a>
                        <div class="dropdown-content">
                            <a href="addguru.php">Data Guru</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#">Data</a>
                        <div class="dropdown-content">
                            <a href="guru.php">Data Guru</a>
                            <a href="kelas.php">Data Kelas</a>
                            <a href="pelanggaran.php">Data Siswa</a>
                        </div>
                    </li>
                    <li>
                        <a href="galeri.php">Galeri</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Grafik</a>
                        <div class="dropdown-content">
                            <a href="grafik-kelas.php">Grafik Kelas</a>
                            <a href="grafik-guru.php">Grafik Guru</a>
                            <a href="grafik-siswa.php">Grafik Siswa</a>
                        </div>
                    </li>

                    <li>
                        <a href="contact.php">Kontak</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <div class="login-signup">
                <a href="../index.php">Logout</a>
            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
</nav>
    <!-- navbar -->

    <main class='dashboard'>

        <!-- main content -->
        <div class="main-content">
            <div class="title-main">
                <h2>Selamat Datang</h2>
                <h2>Di Aplikasi</h2>
                <h1>Guru Ku</h1>



                          <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="../uploads/1695267148.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../uploads/WhatsApp Image 2023-09-18 at 14.12.36.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="../uploads/WhatsApp Image 2023-09-18 at 14.15.42.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="../uploads/WhatsApp Image 2023-09-18 at 14.15.53.jpeg" alt=""></div>
      <div class="swiper-slide"><img src="../uploads/WhatsApp Image 2023-09-18 at 14.27.28.jpeg" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
            </div>
            <div class="top">
                <div class="data-card">
                    <div class="container-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="container-text">
                        <p>Siswa Terdaftar</p>
                        <span><?php
                        $d = mysqli_num_rows($result3);
                        echo $d;
                        ?></span>
                    </div>
                </div>
                <div class="data-card kelas">
                    <div class="container-icon">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <div class="container-text">
                        <p>Kelas</p>
                        <span>
                        <?php
                            $data = mysqli_num_rows($result2);
                            echo $data;
                        ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="bottom">

            </div>
        </div>
        <!-- main content -->

    </main>
    <script src="../js/menu.js"></script>
</body>
</html>