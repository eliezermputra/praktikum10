<?php
include "cekkoneksi.php";
$sql="select * from alumni order by name;";
$=mysql_query($sql) or die("Proses cetak gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>id</th>
<th>name</th>
<th>address</th>
<th>email</th>
<th>angkatan</th>
<th>jurusan</th>
<th>username</th>
<th>password</th>
<th></th>";
$no=1;
while($hasil=mysql_fetch_row($qry)){
echo "<tr>
<td>$no</td>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
<td>$hasil[7]</td>
<td>$hasil[8]</td>
</tr>";
$no++;
}
echo "</table>";
?>
<a href="signup.php">Kembali</a>