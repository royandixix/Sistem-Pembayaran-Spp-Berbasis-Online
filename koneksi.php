<?php

    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $database = "projectspp";

    $koneksi = mysqli_connect($server,$user,$pass,$database) or die(mysqli_error($koneksi));
    
?>