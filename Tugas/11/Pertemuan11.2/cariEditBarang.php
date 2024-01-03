<center>
    <form action="saveEditBarang.php" method="post">
<font size=7>
Menampilkan Data Barang<br>
<hr>
<table border=0>
<?php
// require ("koneksi.php");
$kodebrg = $_POST['kodebrg'];
$sql = "select * from barang where kode = '$kodebrg'";
$conn=mysqli_connect("localhost","root","","belajar");
$hasil=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);
do
{
list($kodebrg,$namabarang,$harga,$stok)=$row;
if($kodebrg != "") {
    echo"<tr><td>KODE BARANG<td><input name=kodebrg value=$kodebrg size=5 readonly>";
    echo"<tr><td>NAMA BARANG<td><input name=namabarang value=$namabarang size=20>";
    echo"<tr><td>HARGA<td><input name=harga value=$harga>";
    echo"<tr><td>STOK<td><input name=stok value=$stok>";
}
}
while($row=mysqli_fetch_row($hasil));
if($kodebrg == "") {
    echo"</table><h5>MAAF DATA TIDAK ADA";
    exit;
}
?>
</table>
<hr>
<input type=submit value=Save>
<input type=reset value=Reset>