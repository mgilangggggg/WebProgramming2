<?php
error_reporting(0);
echo "<center>";
echo "<font size=6>";
echo "<h1>";
echo "WARTEG BAHARI";
echo "<hr>";
echo "<table>";
$nasigoreng = $_POST['nasigoreng'];
if($nasigoreng) {
    $harganasgor = 15000;
    echo "<tr><td>Nasi Goreng<td> : $harganasgor";
}
$esjeruk = $_POST['esjeruk'];
if($esjeruk) {
    $hargaesjeruk = 5000;
    echo "<tr><td>Es Jeruk<td> : $hargaesjeruk";
}
?>