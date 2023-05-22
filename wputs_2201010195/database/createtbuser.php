<?php

    include("koneksi.php");

    $tbel = "CREATE TABLE User(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(30),
        email VARCHAR(255),
        username VARCHAR(20),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    )";

    $hsl = mysqli_query($cnn,$tbel);
    if($hsl){
        echo "Table tbMHS Sukses Dibuat";
    }