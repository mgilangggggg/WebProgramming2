<?php
error_reporting(0);
echo "<center>";
echo "<hr width=550>";
echo "<h1>PENJUALAN TIKET KERETA API";
echo "<hr width=550>";
echo "<table>";

$kotatujuan = $_POST ['tujuan'];
$kelas = $_POST ['kelas'];
$jumlahtiket = $_POST ['jumlahtiket'];

if ($kotatujuan == "BANDUNG") {
    if ($kelas == "EKONOMI") {
        $harga = 100000;
    }
    if ($kelas == "BISNIS") {
        $harga = 125000;
    }
    if ($kelas == "EKSEKUTIF") {
        $harga = 150000;
    }
}
if ($kotatujuan == "JAKARTA") {
    if ($kelas == "EKONOMI") {
        $harga = 150000;
    }
    if ($kelas == "BISNIS") {
        $harga = 175000;
    }
    if ($kelas == "EKSEKUTIF") {
        $harga = 200000;
    }
}
if ($kotatujuan == "CIREBON") {
    if($kelas == "EKONOMI") {
        $harga = 200000;
    }
    if($kelas == "BISNIS") {
        $harga = 250000;
    }
    if($kelas == "EKSEKUTIF") {
        $harga = 300000;
    }
}

$totalharga = $jumlahtiket * $harga;

echo "<tr><td>KOTA TUJUAN<td> $kotatujuan";
echo "<tr><td>KELAS<td> $kelas";
echo "<tr><td colspan=2><hr>";
echo "<tr><td>HARGA TIKET <td align=right> $harga";
echo "<tr><td>JUMLAH <td align=right> $jumlahtiket";
echo "<tr><td colspan=2><hr>";
echo "<tr><td>TOTAL HARGA <td align=right> $totalharga";
?>
