<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$nama_database = "data_siswa";
$db = mysqli_connect($SERVER, $USER, $PASSWORD, $nama_database);
if(!$db){
    die("Gagal terhubung dengan databse: ".mysqli_connect_error());
}
?>