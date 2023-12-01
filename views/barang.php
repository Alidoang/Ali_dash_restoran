<?php
$halaman = "Barang";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';


include_once '../controllers/c_barang.php';

$barang = new c_barang();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <a href="print.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Cetak </a> -->

        <a href="tambah_barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Barang</a>

    </div>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $halaman ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar <?= $halaman ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Qty</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
           

                        <?php
                        if (empty($barang->tampil())) { ?>
                            <tr>
                                <td colspan="6">
                                    <h1>
                                        <center>Tidak Ada Data</center>
                                    </h1>
                                </td>
                            </tr>

                            <?php
                        } else {

                            $nomor = 1;

                            foreach ($barang->tampil() as $b) {
                            ?>

                                <tr>
                                <td><?= $nomor++ ?></td>
                                <td><?= $b->food_name ?></td>
                                <td><?= $b->qty ?></td>
                                <td><?= $b->kategori_makanan ?></td>
                                <td><?= $b->harga ?></td>
                                    <td>
                                        <div style="display: flex; justify-content: center; align-items: center;">
                                            <img src="<?= "../assets/img/" . $b->photo; ?>" alt="<?= $b->food_name ?>" width="50" height="65">
                                        </div>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="edit_barang.php?id=<?= $b->id ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>

                                            <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="../routers/r_barang.php?id=<?= $b->id ?>&aksi=hapus"><button type="button" name="hapus" class="btn btn-round btn-danger">Hapus</button></a>
                                        </center>
                                    </td>
                                </tr>

                        <?php }
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<?php
include_once 'template/footer.php';
?>