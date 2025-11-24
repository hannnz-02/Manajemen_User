<?php
$koneksi = mysqli_connect("localhost", "root", "", "blog");

if(!$koneksi){
    die("Koneksi database gagal: " . mysqli_connect_error());
}

session_start();
?>
