<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpregmalam";

    $koneksi = mysqli_connect($hostname,$username,$password,$dbname);
    if (mysqli_connect_errno()) {
        echo "koneksi database gagal : " . mysqli_connect_error();
        
    }
    else 
    {
        // echo "berhasil";
    }
?>