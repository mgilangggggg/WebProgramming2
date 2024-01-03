<center>
<h1>
MENAMPILKAN DATA PERWALIAN
<hr>
<table border=10>
<tr><th>NO<th>NAMA SISWA<th>MATAKULIAH<th>SKS<th>AKADEMIK
<?php
//require ("koneksi.php");
$conn=mysqli_connect("localhost","root","","belajar");
$sql="SELECT mahasiswa.NAMA, matakuliah.NAMAMK, matakuliah.SKS, perwalian.TAHUNAKADEMIK FROM mahasiswa, matakuliah, perwalian WHERE mahasiswa.NIM = perwalian.NIM AND perwalian.KODEMK = matakuliah.KODEMK";

$hasil=mysqli_query($conn, $sql);
$row=mysqli_fetch_row($hasil);
$n=1;
do
{
list($nama,$namamk,$sks,$tahunakademik)=$row;
echo "<tr><td>$n<td>$nama<td>$namamk<td>$sks<td>$tahunakademik";
$n++;
}
while($row=mysqli_fetch_row($hasil));
?>