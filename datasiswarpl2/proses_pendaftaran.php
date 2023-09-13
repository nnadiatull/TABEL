<?php
include("config.php");
//cek apakah tombol simpan sudah diklik atau belum
if($_SERVEER['REQUEST_METHOD'] == "POST"){
    //ambil data dari form
    $nis = $_POST['id'];
    $nama = $_POST['nis'];
    $alamat = $_POST['nama'];
    $jk = $_POST['jenisKelamin'];
    $no_telp = $_POST['noTelepon'];
    $kelas = $_POST['alamat'];
    $kelas = $_POST['beratBadan'];
    $kelas = $_POST['tinggiBadan'];
    //buat query
    $sql = "INSERT INTO t_siswa(id, nis, nama, jenisKelamin, noTelepon, alamat, beratBadan, tinggi_Badan) VALUE('$nis','$nama','$alamat','$jk','$no_telp','$kelas)";
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));
    //apakah query update berhasil
    if ($query){
        //kalau berhasil,alihkan ke halaman index.php dengan status=sukses
        header('location:index.php?status=sukses');
    }else{
        //kalau berhasil,alihkan ke halaman index.php dengan status=gagal
        header('location:index.php?status=gagal');
    }else{
        die("Akses dilarang...");
    }
    ?>