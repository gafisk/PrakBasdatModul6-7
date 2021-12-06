<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "db_kopsis_baru";

$koneksi = mysqli_connect($host, $user, $pw, $db);
if ($db) {
    echo "Koneksi ke database Berhasil! <br> <br>";
} else {
    echo "koneksi gagal!";
};

$prosedur = mysqli_query($koneksi, "SHOW PROCEDURE STATUS");

foreach ($prosedur as $dt => $hasil) {
    print_r($hasil);
}

echo "<br>Diatas ini adalah procedur <br> <br> <br> Dibawah ini adalah Trigger <br>";

$trigger = mysqli_query($koneksi, "SHOW TRIGGERS");
foreach ($trigger as $key) {
    print_r($key);
}