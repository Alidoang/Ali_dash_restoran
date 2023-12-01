<?php


include_once '../controllers/c_barang.php';

$barang = new c_barang();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Daftar Barang</title>
</head>

<body>

    <center>
        <h2>DATA DAFTAR BARANG</h2>
    </center>

    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
        </thead>

        <center>
        <tbody>

            <?php

            $nomor = 1;

            foreach ($barang->tampil() as $b) {
            ?>
                
                    <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $b->nama_barang ?></td>
                        <td><?= $b->qty ?></td>
                        <td><?= $b->harga ?></td>
                        <td>
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="<?= "../assets/img/" . $b->photo; ?>" alt="<?= $b->nama_barang ?>" width="50" height="65">
                            </div>
                        </td>
                    </tr>
                

            <?php } ?>

        </tbody>
        </center>
    </table>

    <script>
        window.print();
    </script>
</body>

</html>