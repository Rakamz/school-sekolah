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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <style>
        .main-content h1{
            font-family:auto;
            color:#0d6efd;
        }
        container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color:black;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-top: 10px;
}

input[type="text"],
input[type="email"],
textarea {
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

.main h1{
    color: azure;
    text-align: center;
}

/* FOOTER */


.footer {
  background-color:#0d6efd;
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 50px 50px 60px 50px;
}

.footer .footer-left,
.footer .footer-center,
.footer .footer-right {
  display: inline-block;
  vertical-align: top;
}

@media (max-height:800px) {
  footer {
      position: static;
  }

  header  footer{
      padding-top: 40px;
  }
}

.footer .footer-left {
  width: 30%;
}

.footer h3 {
  color: #f5f5f5;
  margin: 0;
  padding-bottom: 20px;
  font-family: Georgia, 'Time New Roman', Times, serif;
}

.footer .footer-left img {
  vertical-align: middle;
  border-radius: 50%;
}

.footer .footer-left .credit-cards {
  width: 100%;
}

.footer .footer-copyright {
  color:rgb(22, 255, 177);
  font-size: 14px;
  font-weight: normal;
  margin: 0;
  padding-top: 10%;
}

.footer .footer-center {
  width: 35%;
}

.footer .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0px;
}

.footer .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer .footer-center p a {
  color: rgb(22, 255, 177);
  text-decoration: none;
}

.footer .footer-right {
  width: 30%;
}

.footer .footer-about {
  line-height: 20px;
  color: azure;
  font-size: 13px;
  font-weight: normal;
  margin: 0px;
}

.footer .footer-about span {
  display: block;
  color: #ffffff;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer .footer-media {
  margin-top: 25px;
}

.footer .footer-media a {
  display: inline-block;
  width: 50px;
  height: 50px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 50%;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 50px;
  margin-right: 3px;
  margin-bottom: 5px;
}

.footer .footer-media a:hover {
  background-color: rgb(0, 122, 82);
}

@media (max-width: 880px) {

  .footer .footer-left,
   .footer-center,
   .footer-right {
      display: block;
      width: 100%;
      margin-bottom: 40px;
      text-align: left;
  }

  .footer .footer-center i {
      margin-left: 0px;
  }

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
                        <a href="dashboard.php"  >Beranda</a>
                    </li>
                    <li>
                        <a href="guru.php">Data Guru</a>
                    </li>
                    <li>
                        <a href="Kelas.php" >Data Kelas</a>
                    </li>
                    <li>
                        <a href="pelanggaran.php">Data Siswa</a>
                    </li>
                    <li>
                        <a href="galeri.php"  >Galeri</a>
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
                        <a href="contact.php"class="active">Kontak</a>
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
        <h1>Contact Us</h1>
        <div class="container">
        <form action="#" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send</button>
        </form>

        </div>
        <!-- main content -->

    </main>

    <footer class="footer">
        <div class="footer-left">
            <h3>Guru Ku</h3>
            <div class="credit-cards">
                <img src="../asset/logo_smkn1banjar.png" alt="">
            </div>
            <p class="footer-copyright">2023 @Rakamz</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span>SMKN 1 Banjar ,Banjar- Jawa Barat</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+62 077-777-77</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">smkn1banjar@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>Tentang</span>
                    Di Channel ini kita akan berbagi barbagai Tutorial design, Pemograman dan lain-lain. Silahkan subscribe untuk kemajuan channel ini, jangan lupa, like dan comments. agar channel ini semakin berkembang
            </p>

            <div class="footer-media">
                <a href="https://www.instagram.com/smknegeri1banjar/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/raka-muhamad-zidan-63865a27b" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>

    </footer>

    <script src="../js/menu.js"></script>
</body>
</html>