<?php
require "../function/config.php";
require "../function/readdatadasboard.php";

require "../function/cek_user.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



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



    <style type="text/css">
        .container h3{
            color:#0d6efd;
            font-family:cursive;
            padding-top:20px;
            margin-bottom:35px;
        }
        .gallery {
            display: inline-block;
            margin-top: 20px;
        }

        .close-icon {
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: -10px;
            padding: 5px 8px;
        }

        .form-image-upload {
            background: #0d6efd none repeat scroll 0 0;
            padding: 15px;
        }

        .carousel-inner>.item>a>img,
        .carousel-inner>.item>img,
        .img-responsive,
        .thumbnail a>img,
        .thumbnail>img {
            width: 300px !important;
            height: 250px !important;
        }
        .h1,.h2,.h3{
            margin-top: 20px;
            margin-bottom:20px;
        }
        .btn btn-success{
            color:#BC8F8F;
        }

        .btn-success {
    color:black;
    background-color:azure;
    border-color: #b6ffb6;
    }

    .btn-success:hover {
    color:white;
    background-color:#0d6efd;
    border-color: #b6ffb6;
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
        <div class="container">

<h3 style="text-align: center; font-size: 35px;

"><b>Galeri SMKN 1 Banjar</b></h3>

<form action="../function/imageUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">

    <!-- code to show error message -->
    <?php if (!empty($_SESSION['error'])) { ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <li><?php echo $_SESSION['error']; ?></li>
            </ul>
        </div>
    <?php unset($_SESSION['error']);
    } ?>

    <!-- code to show success message  -->
    <?php if (!empty($_SESSION['success'])) { ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" onclick="closeAlert()">×</button>
            <strong><?php echo $_SESSION['success']; ?></strong>
        </div>
    <?php unset($_SESSION['success']);
    } ?>

    <div class="row">
        <div class="col-md-5">
            <strong>Title:</strong>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="col-md-5">
            <strong>Image:</strong>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col-md-2">
            <br />
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </div>
</form>


<div class="row">
    <div class='list-group gallery' style="width:100%;">
        <?php
        require('../function/config.php');

        $sql = "SELECT * FROM image_gallery";
        $images = $conn->query($sql);

        while ($image = $images->fetch_assoc()) {

        ?>
            <div class='col-sm-3' style="float: left;">

                <a class="thumbnail fancybox" rel="ligthbox" href="./uploads/<?php echo $image['image'] ?>">
                
                    <img alt="" src="../uploads/<?php echo $image['image'] ?>" />
                    <div class='text-center'>
                        <small class='text-muted'><?php echo $image['title'] ?></small>
                    </div> <!-- text-center / end -->
                </a>

                <!-- form to delete image -->
                <form action="../function/imageDelete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                    <button type="submit" title="delete" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                </form>

           </div> <!-- col-6 / end -->
        <?php } ?>

    </div> <!-- list-group / end -->
</div> <!-- row / end -->
</div> <!-- container / end -->
        <!-- main content -->

    </main>
    <script src="../js/menu.js"></script>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none",
        });
    });
    // Function to close the alert box
    function closeAlert() {
        var alertBox = document.querySelector('.alert');
        alertBox.style.display = 'none';
    };
</script>