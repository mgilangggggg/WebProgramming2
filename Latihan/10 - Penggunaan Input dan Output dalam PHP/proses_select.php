<?php
echo "<center>";
echo "<font size=10>";
echo "<font color=blue>";
echo "Program Gaji Pegawai";
echo "<hr>";
echo "<table>";

$namapegawai = $_POST['namapegawai'];
$jabatan = $_POST['jabatan'];
$tahunmasuk = $_POST['tahunmasuk'];

$lamakerja = 4000 - $tahunmasuk;

if ($jabatan == "MANAGER") $gajipokok = 10000000;
if ($jabatan == "MARKETING") $gajipokok = 8000000;

$tunjangan = 0.05 * $gajipokok * $lamakerja;
$gajitotal = $gajipokok + $tunjangan;

echo "<tr><td>Nama Pegawai<td> : $namapegawai";
echo "<tr><td>Jabatan<td> : $jabatan";
echo "<tr><td>Tahun Masuk<td> : $tahunmasuk";
echo "<tr><td>Lama Kerja<td> : $lamakerja";
echo "<tr><td>Gaji Pokok<td> : $gajipokok";
echo "<tr><td>Tunjangan<td> : $tunjangan";
echo "<tr><td>Gaji Total<td> : $gajitotal";
?>
