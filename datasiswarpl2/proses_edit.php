<?php
include("config.php");
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
    //buat query update
    $sql = "UPDATE siswa SET id='$id', nis='$nis',
    nama='$nama', jenisKelamin='$jk', noTelepon='$no_telp' WHERE alamat = '$alamat' WHERE
    beratBadan='$beratBadan', tinggiBadan='$tinggiBadan'";
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));
    //apakah update berhasil
    if ($query){
        //kalau berhasil,alihkan ke halaman index.php  dengan status=sukses
        header('location:index.php?status=sukses');
}else{
     //kalau berhasil,alihkan ke halaman index.php  dengan status=gagal
     header('location:index.php?status=gagal');
}
}else{
    die("akses dilarang...");

}
?>