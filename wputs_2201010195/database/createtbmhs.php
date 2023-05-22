<?php
    include("koneksi.php");

    $tbel = "CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR (30),
        nim VARCHAR (50),
        prodi VARCHAR (255),
        tgl_lahir date,
        jk VARCHAR(255),
        id_mhs VARCHAR(255)
    )"; 

 $hsl = mysqli_query($cnn,$tbel);
 if($hsl){
    echo "Table Mahasiswa Sukses Dibuat";
 }