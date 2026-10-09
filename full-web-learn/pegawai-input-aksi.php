<?php
include "koneksi.php";

$id_pegawai = $_POST['id_pegawai'];
$nama       = $_POST['nama_pegawai'];
$umur       = $_POST['umur'];
$alamat     = $_POST['alamat'];
$no_hp      = $_POST['nomor_hp'];
$gender     = isset($_POST['gender']) ? $_POST['gender'] : '';
$jabatan    = $_POST['jabatan'];

$sql = "INSERT INTO pegawai (id_pegawai, nama, umur, alamat, no_hp, gender, jabatan)
        VALUES ('$id_pegawai', '$nama', '$umur', '$alamat', '$no_hp', '$gender', '$jabatan')";

if (mysqli_query($koneksi, $sql)) {
    header("Location: pegawai.php");
} else {
    echo "Gagal menyimpan: " . mysqli_error($koneksi);
}
