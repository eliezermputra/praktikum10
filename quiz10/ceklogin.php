<?php 
include 'cekkoneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn,"SELECT * FROM alumni WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($sql);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "alumni";
	header("location:akun.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>