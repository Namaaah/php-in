<?php
include "koneksi.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];

mysqli_query($koneksi, "INSERT INTO tb_barang (id_barang,nama_barang,harga,stock) VALUES ('$id_barang','$nama_barang','$harga','$stock')");
header("Location:barang.php");
?>