<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "db_siswa";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $kelas=$_POST['kelas'];

$tambah = mysqli_query($conn, "INSERT INTO tb_siswa VALUES ('', '$nama', '$kelas', '$alamat')")or die("Proses simpan ke database gagal");

header("location:cetak.php");
?>