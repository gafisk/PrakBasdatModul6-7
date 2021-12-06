<?php
include "TP2Modul6.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <td> Kode Barang </td>
                <td> Nama Barang </td>
                <td> Harga Beli </td>
                <td> Harga Jual </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM barang");
                $no = 1;
                foreach ($data as $dt) : ?>
                <td> <?= $no; ?> </td>
                <td> <?= $dt['kode_barang']; ?> </td>
                <td> <?= $dt['nama_barang']; ?> </td>
                <td> <?= $dt['harga_beli']; ?> </td>
                <td> <?= $dt['harga_jual']; ?> </td>
            </tr>
            <?php $no++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>