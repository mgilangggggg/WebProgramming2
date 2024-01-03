<?php
error_reporting(0);
echo "<center>";
echo "<h1>";
echo "Program Penjualan";
echo "<hr>";
echo "<table>";
$namabarang = $_POST['namabarang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$total = $harga * $jumlah;

echo "<tr><td>Nama Barang<td>: $namabarang";
echo "<tr><td>Harga Barang<td>: $harga";
echo "<tr><td>Jumlah<td>: $jumlah";
echo "<tr><td colspan=3><hr>";
echo "<tr><td>Total Harga<td>: $total";
?>