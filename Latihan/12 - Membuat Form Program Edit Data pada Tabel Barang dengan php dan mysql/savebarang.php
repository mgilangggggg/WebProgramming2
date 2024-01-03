<html>
    <center>
        <h1>Informasi Data Barang</h1>
        <table>
            <?php
            // require("koneksi.php");
            $conn=mysqli_connect('localhost','root','','belajar');
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

            if($kodebrg!='')
            {
            $sql="insert into barang values ('$kodebrg','$namabarang','$harga','$stok') ";
            $hasil=mysqli_query($conn,$sql);
            echo "Data telah ditambahkan";
            }
            else
            {
            echo "Kode Barang Tidak Boleh Kosong";
            }
            ?>

        </table>
    </center>
</html>