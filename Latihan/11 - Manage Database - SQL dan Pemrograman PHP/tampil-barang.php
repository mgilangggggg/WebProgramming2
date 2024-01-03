<center>
<font size=7>
Tampil Data Barang<br>
<hr>
<table border=10>
<tr bgcolor=silver><td width=50><center>No<td width=100> <center>Kode
Barang<td width=200><center>Nama Barang
<td width=100><center>Harga<td width=50><center>Stok
<?php
require ("koneksi.php");
$sql="select * from barang";
$hasil=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);
$n=1;
do
{
list($kodebrg,$namabarang,$harga,$stok)=$row;
echo "<tr><td>$n<td>$kodebrg<td>$namabarang<td align=right>$harga<td
align=right>$stok";
$n++;
}
while($row=mysqli_fetch_row($hasil));
?>