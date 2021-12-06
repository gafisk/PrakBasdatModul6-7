<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_kopsis_baru") or die(mysqli_error($koneksi));
if ($koneksi) {
    echo "database berhasil terhubung!";
}

if (isset($_POST['submit'])) {
    if (!empty($_POST['kode_barang']) && !empty($_POST['nama_barang']) && !empty($_POST['harga_beli']) && !empty($_POST['harga_jual'])) {

        $kode_barang = strtoupper($_POST['kode_barang']);
        $nama_barang = $_POST['nama_barang'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];

        $query = "INSERT iNTO barang VALUES ('$kode_barang', '$nama_barang', '$harga_beli', '$harga_jual')";

        $run = mysqli_query($koneksi, $query);

        if ($run) {
            echo "<br>data berhasil di tambahkan";
        } else {
            echo "<br>data tidak berhasil di tambahkan";
        }
    } else {
        echo "<br>Semua Field Harus di Isi";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 3 Modul 7</title>
</head>

<body>
    <form action="TP3Modul7.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="kode_barang"> Kode Barang</label>
                </td>
                <td>
                    <input type="text" name="kode_barang" id="kode_barang" style="text-transform: uppercase;">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nama_barang"> Nama Barang</label>
                </td>
                <td>
                    <input type="text" name="nama_barang" id="nama_barang">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="harga_bali"> Harga Beli</label>
                </td>
                <td>
                    <input type="number" name="harga_beli" id="harga_beli">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="harga_jual"> Harga Jual</label>
                </td>
                <td>
                    <input type="number" name="harga_jual" id="harga_jual">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>