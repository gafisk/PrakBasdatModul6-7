<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "db_kopsis_baru";

$koneksi = mysqli_connect($host, $user, $pw,);
$db = mysqli_select_db($koneksi, $db);
if ($db) {
    echo "Koneksi ke database Berhasil!";
} else {
    echo "koneksi gagal!";
};