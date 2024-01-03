<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Barang </title>
</head>

<body>
    <center>
        <font size=6>
            Informasi Data Barang
        </font>
        <hr width=320>
        <table>
            <?php
            require("koneksi.php");
            $kodebrg = $_POST['kodebrg'];
            $namabarang = $_POST['namabarang'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];
            echo "<tr><td>Kode Barang<td>$kodebrg";
            echo "<tr><td>Nama Barang<td>$namabarang";
            echo "<tr><td>Harga<td>$harga";
            echo "<tr><td>Stok<td>$stok";
            echo "</table>";
            echo "<hr width=320>";
            if ($kodebrg != '') {
                $sql = "insert into barang values ('$kodebrg','$namabarang','$harga','$stok') ";
                $hasil = mysqli_query($conn, $sql);
                echo "Data telah ditambahkan";
            } else {
                echo "Kode Barang Tidak Boleh Kosong";
            }
            ?>
    </center>
</body>

</html>