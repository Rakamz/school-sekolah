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
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">





    <!-- Tambahkan kode ini di bagian head HTML Anda -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<script>
// Fungsi untuk mencetak tabel ke PDF
function printTableToPDF() {
    // Membuat objek jsPDF
    var doc = new jsPDF();

    // Menambahkan judul ke PDF
    doc.text("Daftar Jadwal Rapat", 10, 10);

    // Mengambil elemen tabel berdasarkan ID
    var table = document.getElementById("jadwalTable");

    // Menghitung jumlah baris dan kolom dalam tabel
    var rowCount = table.rows.length;
    var colCount = table.rows[0].cells.length;

    // Menginisialisasi data tabel
    var data = [];

    // Mengambil data dari setiap sel dalam tabel
    for (var i = 0; i < rowCount; i++) {
        var row = [];
        for (var j = 0; j < colCount; j++) {
            row.push(table.rows[i].cells[j].textContent);
        }
        data.push(row);
    }

    // Mengatur opsi untuk format tabel dalam PDF
    var options = {
        startY: 20
    };

    // Mencetak tabel ke PDF
    doc.autoTable({
        head: [data[0]], // Header tabel
        body: data.slice(1), // Data tabel (tanpa header)
        margin: { top: 20 },
    });

    // Simpan atau tampilkan PDF (sesuai kebutuhan Anda)
    // Simpan PDF ke file
    // doc.save("daftar_jadwal_rapat.pdf");

    // Tampilkan PDF dalam jendela baru
    // doc.output("dataurlnewwindow");

    // Contoh untuk tampilkan dialog simpan PDF
    doc.output("dataurl");
}

</script>

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

    <main>

        <!-- main content -->
        <div class="main-content">
            <div class="box-container">
                <div class="title-box">
                    <h2>Seluruh Guru</h2>

                </div>
                
                <div class="main-table">
                    <table id="" class="table table-striped tablepagination" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <?php
    $counter = 1;         
    while ($row = mysqli_fetch_assoc($result)) :
    ?>
        <tr>
            <td><?= $counter++; ?></td>
            <td><?= $row['nip']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['status']; ?></td>
            <form id="deleteForm" action="../function/deleteguru.php?nip=<?php echo $row["nip"] ?>" method="post">
                                <td style="display: flex; justify-content: center; align-items: center;">
                                    <label for="data1">
                                        <input type="checkbox" class="checkbox" name="data[]" value="<?php echo $row["nip"];?>" data-id="<?php echo $row["nip"];?>"> 
                                    </label>
                                </td>
                                    <!-- Script for chance href -->
                                    <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        const checkboxes = document.querySelectorAll(".checkbox");
                                        
                                        checkboxes.forEach(function (checkbox) {
                                            checkbox.addEventListener("change", function () {
                                                let selectedIds = [];
                                                
                                                // Mengumpulkan ID prangkat yang dicentang
                                                checkboxes.forEach(function (cb) {
                                                    if (cb.checked) {
                                                        selectedIds.push(cb.value);
                                                    }
                                                });
                                                
                                                // Membuat tautan dengan ID yang dipilih
                                                const href = "editguru.php?id_prangkat=" + selectedIds.join(",") + "&nip=<?php echo $row["nip"];?>";
                                                
                                                // Mengubah tautan href
                                                document.getElementById("myLink").setAttribute("href", href);
                                            });
                                        });
                                    });
                                    </script>
                                        <?php endwhile ?>
                                    </tr>
                                </tbody>
                                <div class="action">
                    <label for=""></label>
                    <input type="submit" class="del" value="Hapus" onclick="return confirm('Apakah kamu yakin ingin menghapus ini?')">
                </form>
                <button class="edit" id="editButton">Edit</button>
                </div>
                    </table>
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