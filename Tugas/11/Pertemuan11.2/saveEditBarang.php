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

            $sql="update barang set namabarang='$namabarang', harga='$harga', stok='$stok' where kode='$kodebrg'";
            $hasil=mysqli_query($conn,$sql);
            echo "Data telah Berhasil diedit";
            ?>

        </table>
    </center>
</html>