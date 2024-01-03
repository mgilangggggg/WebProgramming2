<?php
error_reporting(0);
echo "<center>";
echo "<h1>BANDUNG MOTOR DAN AKSESORIES";
echo "<hr width=600>";
echo "<table>";

$merk = $_POST['merk'];
$helm = $_POST['helm'];
$jaket = $_POST['jaket'];
$sarungtangan = $_POST['sarungtangan'];

echo "<tr><td>NAMA BARANG<td>HARGA";
echo "<tr><td colspan=2><hr>";

if ($merk == "HONDA") {
    $harga = 15000000;
    echo "<tr><td>MOTOR $merk <td align=right> $harga";
    if ($helm) {
        $hargahelm = 350000;
        echo "<tr><td>HELM <td align=right> $hargahelm";
    }
    if ($jaket) {
        $hargajaket = 250000;
        echo "<tr><td>JAKET <td align=right> $hargajaket";
    }
    if ($sarungtangan) {
        $hargasarungtangan = 50000;
        echo "<tr><td>SARUNG TANGAN <td align=right> $hargasarungtangan";
    }
}

if ($merk == "YAMAHA") {
    $harga = 10000000;
    echo "<tr><td>MOTOR $merk <td align=right> $harga";
    if ($helm) {
        $hargahelm = 300000;
        echo "<tr><td>HELM <td align=right> $hargahelm";
    }
    if ($jaket) {
        $hargajaket = 150000;
        echo "<tr><td>JAKET <td align=right> $hargajaket";
    }
    if ($sarungtangan) {
        $hargasarungtangan = 70000;
        echo "<tr><td>SARUNG TANGAN <td align=right> $hargasarungtangan";
    }
}

if ($merk == "SUZUKI") {
    $harga = 12000000;
    echo "<tr><td>MOTOR $merk <td align=right> $harga";
    if ($helm) {
        $hargahelm = 250000;
        echo "<tr><td>HELM <td align=right> $hargahelm";
    }
    if ($jaket) {
        $hargajaket = 200000;
        echo "<tr><td>JAKET <td align=right> $hargajaket";
    }
    if ($sarungtangan) {
        $hargasarungtangan = 750000;
        echo "<tr><td>SARUNG TANGAN <td align=right> $hargasarungtangan";
    }
}

$totalharga = $harga + $hargahelm + $hargajaket + $hargasarungtangan;

echo "<tr><td colspan=2><hr>";
echo "<tr><td>TOTAL HARGA <td align=right> $totalharga";
?>
