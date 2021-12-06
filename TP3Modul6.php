<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "db_kopsis_baru";
try {
    $koneksi = new PDO("mysql:host=$host;dbname=$db", $user, $pw);
    echo "Koneksi ke database berhasil!";
} catch (PDOException $e) {
    echo "Koneksi Kedatabase Gagal " . $e->getMessage();
}