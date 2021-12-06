<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_kopsis_baru") or die(mysqli_error($koneksi));
if ($koneksi) {
    echo "database berhasil terhubung!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 4 Modul 7</title>
</head>

<body>
    <form action="ubah.php" method="POST">
        <table border="1">
            <thead>
                <th>NO</th>
                <th>Kode Barang</th>
                <th>Harga Beli</th>
                <th>Harga Jual </th>
                <th> Aksi </th>
            </thead>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM barang");
            $no = 1;
            foreach ($query as $dt) : ?>
            <tbody>
                <td><?= $no ?></td>
                <td><?= $dt['kode_barang'] ?></td>
                <td><?= $dt['harga_beli'] ?></td>
                <td><?= $dt['harga_jual'] ?></td>
                <td><a href="ubah.php?kb=<?= $dt['kode_barang'] ?>"> Ubah </a></td>
            </tbody>

            <?php
                $no++;
            endforeach; ?>
        </table>

    </form>
</body>

</html>