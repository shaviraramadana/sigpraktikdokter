<?php
$host = "localhost";
$user = "id21645556_sigdokterpraktik";
$pass = "sigDokterPr@t1k";
$name = "id21645556_sig_map4";

$koneksi = mysqli_connect($host, $user, $pass, $name);
if (mysqli_connect_errno()) {
    echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
}
//mysqli_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
