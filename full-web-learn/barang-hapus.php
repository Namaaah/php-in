<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id_barang='$id'");
header("Location: barang.php");
