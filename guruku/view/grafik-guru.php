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
                        <a href="">Beranda</a>
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
                        <a href="#" class="active">Grafik</a>
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
        <div class="grafik" id="grafik1">
                <tr>
    <td><h2>Grafik Pie 3D Guru</h2>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['jk', 'status']
      <?php
      require'../function/config.php';
      $query = $conn -> query ("SELECT * FROM guru GROUP by status");
      foreach ($query as $key => $value){
        $angka = mysqli_num_rows($conn -> query ("SELECT * FROM guru WHERE status = '".$value ['status']."'"));
        echo ",['".$value['status']."', ".$angka."]";
      }
      ?>
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
 
    <center>
    <div id="piechart_3d" style="width: 700px; height: 500px;"></div>
  </center></td>

    </div>
</div>


</script>

<div class="grafik" id="grafik2">
                <tr>
    <td><h2>Grafik Bar chart Guru </h2>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['jk', 'status']
      <?php
      require'../function/config.php';
      $query = $conn -> query ("SELECT * FROM guru GROUP by status");
      foreach ($query as $key => $value){
        $angka = mysqli_num_rows($conn -> query ("SELECT * FROM guru WHERE status = '".$value ['status']."'"));
        echo ",['".$value['status']."', ".$angka."]";
      }
      ?>
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.BarChart(document.getElementById('bar_chart'));
        chart.draw(data, options);
      }
    </script>
 
    <center>
    <div id="bar_chart" style="width: 700px; height: 500px;"></div>
  </center></td>
</div>
    </div>







        </div>


</div>

        </div>
        <!-- main content -->

    </main>
    <script src="../js/menu.js"></script>
</body>
</html>