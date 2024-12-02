<?php
require "../function/config.php";
require "../function/readkelas.php";

require "../function/cek_user.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruKu | Kelas</title>
    <link rel="shortcut icon" href="../asset/logo_smkn1banjar.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/kelas.css">
    <link rel="stylesheet" href="../css/responsive.css">
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


    <main class='kelas-tab'>
        <!-- main content -->
        <div class="main-content">
            <div class="box-container">
                <div class="title-box">
                    <h2>Seluruh Kelas</h2>
                    <button class="button-add" id="btn-add-class">
                        <i class="fa-solid fa-plus"></i>
                        <p>
                            Tambah Kelas
                        </p>
                    </button>
                </div>
                <div class="main-table">
                    <table id="tablepagination" class="table table-striped tablepagination" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Siswa</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;            
                            while ($row = mysqli_fetch_assoc($result)) { 
                            ?>
                                <tr>
                                    <td><?php echo $i;$i++ ?></td>
                                    <td><?php echo $row["nama_kelas"]; ?></td>
                                    <td><?php echo $row["siswa"]; ?></td>
                                    <td class="flex-row btn-table">
                                        <div class="pc-version">
                                            <a href="siswa.php?c_kelas=<?php echo $row["c_kelas"]; ?>">
                                                <button class="btn-view">
                                                    <i class="fa fa-eye"></i>
                                                    Lihat Siswa
                                                </button>
                                            </a>
                                            <a href="editkelas.php?c_kelas=<?php echo $row["c_kelas"]  ?>">
                                                <button class="btn-edit">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit
                                                </button>
                                            </a>
                                            <a href="../function/deletekelas.php?c_kelas=<?php echo $row["c_kelas"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus kelas ini?')">
                                                <button class="btn-trash">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>

                                        </div>
                                        <div class="android-version">
                                            <button class='list-action'>
                                                 <i class="fa-solid fa-list"></i>
                                            </button>

                                            <div class="listbox-android">
                                                <a href="siswa.php?c_kelas=<?php echo $row["c_kelas"]; ?>">
                                                    <button class="btn-view">
                                                        <i class="fa fa-eye"></i>
                                                        
                                                    </button>
                                                </a>
                                                <a href="editkelas.php?c_kelas=<?php echo $row["c_kelas"]  ?>">
                                                    <button class="btn-edit">
                                                        <i class="fa fa-pencil"></i>
                                                        
                                                    </button>
                                                </a>
                                                <a href="../function/deletekelas.php?c_kelas=<?php echo $row["c_kelas"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus kelas ini?')">
                                                    <button class="btn-trash">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                    </table>
                </div>

                <!-- alert notification -->
                <div class="delete-alert">

                </div>
            </div>
        </div>
        <div class="backgroundclass-container" id="background-add-class">
           <div class="notif-delete">
                <div class="title-delete">
                    <h2>Delete siswa</h2>
                </div>
                <div class="main-content-delete">
                    <div class="text-delete-content">
                        <p>Apakah anda yakin ingin menghapus murid ini?</p>
                    </div>
                    <div class="button-delete-container">
                        <a href="">
                            <button>
                                Hapus
                            </button>
                        </a>
                        <a href="">
                            <button>
                                batal
                            </button>
                        </a>
                    </div>
                </div>
           </div>


            <div class="addclass-container">
                <div class="title-class">
                    <p>Tambah Kelas</p>
                </div>

                <div class="main-content-class">
                    <div class="input-class-container">
                        <h2>KELAS</h2>
                <form action="../function/tambahkelas.php" method="POST" '>
                        <input type="text" name="kelas_input" id="">
                    </div>
                    <div class="button-container" >
                            <a href="" class="btn-save" id="btn-save">
                                <input type="submit" value="Simpan" class=' main-btn-save'>
                            </a>
                </form>
                        <button class="btn-cancel" id="btn-cancel">
                            Batal
                        </button>
                    </div>
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
    <script src="../js/listmenu.js"></script>

    <script type="text/javascript" charset="utf-8">
        $.noConflict();
        $(document).ready(function() {
            $('.tablepagination').DataTable();
        });
    </script>
    <script src="../js/kelas.js"></script>
</body>

</html>