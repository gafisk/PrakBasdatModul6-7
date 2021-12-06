<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_kopsis_baru") or die(mysqli_error($koneksi));
if ($koneksi) {
    echo "database berhasil terhubung!";
}
$kb = $_GET['kb'];
$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang = '$kb' ");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
    $newkb = $_POST['kode_barang'];
    $newhb = $_POST['harga_beli'];
    $newhj = $_POST['harga_jual'];
    $update = mysqli_query($koneksi, "UPDATE barang SET 
            kode_barang = '$newkb', 
            harga_beli = '$newhb', 
            harga_jual = '$newhj' 
            WHERE kode_barang = '$kb' ");
    header('location:TP4Modul7.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Mode</title>
</head>

<body>
    <form action="ubah.php?kb=<?= $kb ?>" method="POST">
        <input type="text" name="kode_barang" id="kode_barang" placeholder="kode barang"
            value="<?= $data['kode_barang'] ?>">
        <input type="text" name="harga_beli" id="harga_beli" placeholder="harga beli"
            value="<?= $data['harga_beli'] ?>">
        <input type="text" name="harga_jual" id="harga_jual" placeholder="harga jual"
            value="<?= $data['harga_jual'] ?>">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>