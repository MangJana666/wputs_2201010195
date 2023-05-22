<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Error");