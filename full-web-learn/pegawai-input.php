<?php
$judul = "Input Pegawai";
include "header.php";
?>
<h1>Input Pegawai</h1>
<form action="pegawai-input-aksi.php" method="POST">
    <table class="form">
        <tr>
            <td>ID Pegawai</td>
            <td><input type="number" name="id_pegawai" required></td>
        </tr>
        <tr>
            <td>Nama Pegawai</td>
            <td><input type="text" name="nama_pegawai" required></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="number" name="umur" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><input type="text" name="nomor_hp" required></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <label><input type="radio" name="gender" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="gender" value="Perempuan"> Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td><input type="text" name="jabatan" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
<a class="kembali" href="pegawai.php">&larr; Kembali ke Data Pegawai</a>
<?php include "footer.php"; ?>
