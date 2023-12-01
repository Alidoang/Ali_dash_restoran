<?php
$halaman = "Home User";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                <h1>
                     Selamat Datang <?= $_SESSION['data']['nama_costumer'] ?>, dan rolenya sebagai <?= $_SESSION['data']['role'] ?>
                </h1>

                </div>
                <!-- /.container-fluid -->

            

<?php
include_once 'template/footer.php';
?>


 