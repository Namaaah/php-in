<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id          = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga       = $_POST['harga'];
    $stock       = $_POST['stock'];

    mysqli_query($koneksi, "UPDATE tb_barang
                            SET nama_barang='$nama_barang', harga='$harga', stock='$stock'
                            WHERE id_barang='$id'");
    header("Location: barang.php");
    exit;
}

$id  = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id'"));
if (!$row) {
    echo "Data tidak ditemukan.";
    exit;
}

$judul = "Edit Barang";
include "header.php";
?>
<h1>Edit Barang</h1>
<form action="barang-edit.php" method="POST">
    <table class="form">
        <tr>
            <td>ID Barang</td>
            <td><input type="number" name="id_barang" value="<?= htmlspecialchars($row['id_barang']) ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang" value="<?= htmlspecialchars($row['nama_barang']) ?>" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="<?= htmlspecialchars($row['harga']) ?>" required></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td><input type="number" name="stock" value="<?= htmlspecialchars($row['stock']) ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
<a class="kembali" href="barang.php">&larr; Kembali ke Data Barang</a>
<?php include "footer.php"; ?>
