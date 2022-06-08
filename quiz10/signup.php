<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "webalumni";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $angkatan=$_POST['angkatan'];
    $jurusan=$_POST['jurusan'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = mysqli_query($conn, "INSERT INTO alumni VALUES ('', '$name', '$address', '$email', '$angkatan', 
    '$jurusan', '$username', '$password')")or die("Proses simpan ke database gagal");
    
header("location:login.php");
?>