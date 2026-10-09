<?php
include "koneksi.php";

$id_barang   = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga       = $_POST['harga'];
$stock       = $_POST['stock'];

$sql = "INSERT INTO tb_barang (id_barang, nama_barang, harga, stock)
        VALUES ('$id_barang', '$nama_barang', '$harga', '$stock')";

if (mysqli_query($koneksi, $sql)) {
    header("Location: barang.php");
} else {
    echo "Gagal menyimpan: " . mysqli_error($koneksi);
}
