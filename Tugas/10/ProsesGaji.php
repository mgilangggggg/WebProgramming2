<?php
error_reporting(0);
echo "<center>";
echo "<h1>PROGRAM GAJI PEGAWAI<br>DINAS KEPENDUDUKAN";
echo "<hr width=350>";
echo "<table>";

$nama = $_POST['namapegawai'];
$golongan = $_POST['golongan'];
$transport = $_POST['transport'];
$makan = $_POST['makan'];
$kesehatan = $_POST['kesehatan'];

echo "<tr><td>Nama Lengkap<td> : $nama";
echo "<tr><td>Golongan<td> : $golongan";
echo "<tr><td colspan=2><hr>";

if ($golongan == "I") $gajipokok = 2500000;
if ($golongan == "II") $gajipokok = 3000000;
if ($golongan == "III") $gajipokok = 3500000;
if ($golongan == "IV") $gajipokok = 4000000;

echo "<tr><td>Gaji Pokok<td> : $gajipokok";

if ($transport) {
    $tr = 300000;
    echo "<tr><td>Transport<td> : $tr";
}
if ($makan) {
    $mk = 500000;
    echo "<tr><td>Makan<td> : $mk";
}
if ($kesehatan) {
    $ks = 400000;
    echo "<tr><td>Kesehatan<td> : $ks";
}

$gajitotal = $gajipokok + $tr + $mk + $ks;

echo "<tr><td colspan=2><hr>";
echo "<tr><td>Gaji Total<td> : $gajitotal";
?>
