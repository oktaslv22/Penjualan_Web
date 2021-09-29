<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="uappemweb(1)";
    $koneksi = mysqli_connect($servername,$username,$password,$db);
    if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }
    