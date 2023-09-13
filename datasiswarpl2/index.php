<?php include('config.php');?>
<html>
   <head><title>Data Siswa</title></header>
   <body>
    <header><h3>Daftar Karyawan</h3></header>
    <nav><a href="v_form.php"><button>Tambah Baru</button></a></nav>
    <br>
    <table border = "1" cellpadding = "8">
       <thread>
            <tr>
            <th>Id</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Aksi</th>
            </tr>
        </thread>
        <tbody>
    
    <?php
    $sql = "SELECT * FROM siswa";
    $query = mysqli_query($db, $sql);
    while($siswa = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$siswa['id']."</td>";
        echo "<td>".$siswa['nis']."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['jenisKelamin']."</td>";
        echo "<td>".$siswa['noTelepon']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['beratBadan']."</td>";
        echo "<td>".$siswa['tinggiBadan']."</td>";
        echo "<td>";
        echo "<a href= 'v_form.php?nis=".$siswa['nis']."'>Edit</a> | ";
        echo "<a href= 'hapus.php?nis=".$siswa['nis']."'>Hapus</a> | ";
        echo "</td>";
        echo "</tr>";
    }

    ?>
    </tbody>
    </table>
    <p>total:
    <?php echo mysqli_num_rows($query) ?>
    </p>
    </body>
    </hml>