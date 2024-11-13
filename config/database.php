<?php

//menghilangkan pelaporan notice error
error_reporting(0);

// mengaktifkan session
session_start();

//deskripsi database
$server = "localhost";
$username = "";
$database = "";
$password = "";

// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password,$database);
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>