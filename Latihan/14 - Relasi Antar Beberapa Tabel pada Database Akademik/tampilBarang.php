<center>
<font size=7>
MENAMPILKAN DATA TRANSAKSI PERNJUALAN<br>
Nama :Muhamad Gilang Abdul Gani<br>
NIM : 10121177<br>
<hr>
<table border=10>
<tr bgcolor=silver><td width=50><center>NO<td width=100> <center>ID BARANG 
<td width=200><center>NAMA BARANG
<td width=200><center>PERSUSAHAAN SUPPLIER<td width=50><center>HARGA
<td width=200><center>NAMA PEMBELI
<td><center>JUMLAH
<td width=150><center>TOTAL HARGA
<td width=100><center>DISKON
<td width=100><center>BAYAR
<?php
// require ("koneksi.php");
$conn=mysqli_connect("localhost","root","","belajar");
$sql="select barang.id_barang, barang.nama_barang, supplier.nama_supplier, barang.harga, pembeli.nama_pembeli, transaksi.jumlah from barang, supplier, pembeli, transaksi where transaksi.id_pembeli = pembeli.id_pembeli and transaksi.id_barang = barang.id_barang and barang.id_supplier = supplier.id_supplier";
$hasil=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);
$n=1;
do
{
    list($id_barang, $nama_barang, $nama_supplier, $harga, $nama_pembeli, $jumlah)=$row;
    if($id_barang == "B002" OR $id_barang == "B003") {
        $total = $jumlah * $harga;
        if($id_barang == "B002") {
            $diskon = 0.2;
            $totalDiskon = $total * $diskon;
            $totalBayar = $total - $totalDiskon;
            echo"<tr><td>$n<td>$id_barang<td>$nama_barang<td>$nama_supplier<td>$harga<td>$nama_pembeli<td align=right>$jumlah<td align=right>$total<td align=right>20% ($totalDiskon)<td align=right>$totalBayar";
            $n++;
        }
        if($id_barang == "B003") {
            $diskon = 0.1;
            $totalDiskon = $total * $diskon;
            $totalBayar = $total - $totalDiskon;
            echo"<tr><td>$n<td>$id_barang<td>$nama_barang<td>$nama_supplier<td>$harga<td>$nama_pembeli<td align=right>$jumlah<td align=right>$total<td align=right>10% ($totalDiskon)<td align=right>$totalBayar";
            $n++;
        }
    } 
}
while($row=mysqli_fetch_row($hasil));
?>