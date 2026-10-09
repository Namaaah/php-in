<?php
$judul = "Input Barang";
include "header.php";
?>
<h1>Input Barang</h1>
<form action="barang-input-aksi.php" method="POST">
    <table class="form">
        <tr>
            <td>ID Barang</td>
            <td><input type="number" name="id_barang" required></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" required></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td><input type="number" name="stock" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
<a class="kembali" href="barang.php">&larr; Kembali ke Data Barang</a>
<?php include "footer.php"; ?>
