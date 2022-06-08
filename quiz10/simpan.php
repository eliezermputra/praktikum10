<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "webalumni";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");
    $posted = date("Y-m-d");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $tahunlulus=$_POST['tahunlulus'];
    $pekerjaan=$_POST['pekerjaan'];
    $message=$_POST['message'];

    $sql = mysqli_query($conn, "INSERT INTO pesanalumni VALUES ('','$posted','$name', '$email', '$address', '$tahunlulus', 
    '$pekerjaan', '$message')")or die("Proses simpan ke database gagal");
    
header("location:login.php");
?>