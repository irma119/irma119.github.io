<?php  

// koneksi database
include 'koneksi.php';

//menangkap sebuah data yag dikirm dari form
$name = $_POST['name'];
$methode = $_POST['method'];
$authorization_type = $_POST['authorization_type'];
$release_date = $_POST['release_date'];
$status = $_POST['status'];
// menginput data ke database
mysqli_query($koneksi, "insert into api value('$name', '$method', '$authorization_type', '$release_date', '$status')");

// mengalihkan halaman kembali ke API.php
header("location:API.php");

?>