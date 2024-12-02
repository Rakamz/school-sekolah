<?php
require "../function/config.php";
require "../function/inputpelanggaran.php";

require "../function/cek_user.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKu | Siswa</title>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/kelas.css">
    <link rel="stylesheet" href="../css/pelanggaran.css">
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
    <header>
        <div class="header-left">
            <div class="logo">
                <img src="../asset/logo_smkn1banjar.png" alt="" class="logo-nav">
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="dashboard.php" >Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Input Data</a>
                        <div class="dropdown-content">
                            <a href="addguru.php">Data Guru</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#"class="active">Data</a>
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


    <main class='input-pelanggaran'>
        <!-- main content -->
        <div class="main-content">
            <div class="box-container">
                <div class="title-box count1">
                    <h2>Cari Siswa</h2>
                </div>
                <div class="input-container">
                    <form action="" method="post">
                        <div class="input-main">
                            <input type="text" name="input_kelas" id="" placeholder="Kelas">
                            <input type="text" name="input_nama" id="" placeholder="NISN / Nama">
                            <input type="submit" value="Cari" name="input_cari" id="" class="btn-cari">
                        </div>
                    </form>
                </div>
            </div>

            <div class="box-container" style='height:130vh'>
                <div class="title-box ">
                    <p>Hasil pencarian dari kelas <b></b> Dan Nama/Nisn <b></b> </p>
                </div>
                <div class="main-table">

                    <table id="tablepagination" class="table table-striped tablepagination" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class='dp-none-android'>NISN</th>
                                <th>Kelas</th>
                                <th>Nama</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $no;
                                        $no++; ?></td>
                                    <td class='dp-none-android'><?php echo $row['nisn'] ?></td>
                                    <td><?php echo $row['nama_kelas'] ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td>
                                        <a href="addpoin.php?c_siswa=<?php echo $row['c_siswa']; ?>&c_kelas=<?php echo $row['c_kelas']; ?>" class="link-poin">
                                            <button class="button-next">
                                                <span>
                                                    Pilih Siswa
                                                </span>
                                                <i class="fa-solid fa-check"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                    <!-- <input type="submit" value="Selanjutnya" class="button-next" name="input_submit"> -->

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
        });
    </script>
</body>

</html>