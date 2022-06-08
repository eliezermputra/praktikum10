<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK PESAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <center><h1 >CETAK KESAN PESAN ALUMNI</h1></center>
    
<?php
include "cekkoneksi.php";
$cetak = mysqli_query($conn, "SELECT * from pesanalumni") or die("Proses cetak gagal" );
    echo "<table width='100%' cellpadding='2' cellspacing='1' border='2'>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Tahun Lulus</th>
    <th>Pekerjaan</th>
    <th>Pesan</th>";
    $no=1;
    foreach($cetak as $hasil){
    echo "<tr>
    <td>$no</td>
    <td>".$hasil['name']."</td>
    <td>".$hasil['email']."</td>
    <td>".$hasil['address']."</td>
    <td>".$hasil['tahunlulus']."</td>
    <td>".$hasil['pekerjaan']."</td>
    <td>".$hasil['message']."</td> 
    </tr>";
    $no++;
}
echo "</table>";
?>
<a text-align="justify" href="pesanalumni.php">Isi Pesan</a>
</body>
</html>