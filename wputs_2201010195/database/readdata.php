<?php
     include("koneksi.php");

     $sql = "SELECT nim, nama from tbMHS";
     $result = mysqli_query($cnn, $sql);

     if(mysqli_num_rows($result > 0){
        while($row = mysqli_fetch_assoc($result)) {
        echo "New Record sukses";
        }
    }else{
        echo "Error";
    }
    mysqli_close($cnn);
?>