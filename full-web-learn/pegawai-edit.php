<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id      = $_POST['id_pegawai'];
    $nama    = $_POST['nama_pegawai'];
    $umur    = $_POST['umur'];
    $alamat  = $_POST['alamat'];
    $no_hp   = $_POST['nomor_hp'];
    $gender  = isset($_POST['gender']) ? $_POST['gender'] : '';
    $jabatan = $_POST['jabatan'];

    mysqli_query($koneksi, "UPDATE pegawai
                            SET nama='$nama', umur='$umur', alamat='$alamat', no_hp='$no_hp', gender='$gender', jabatan='$jabatan'
                            WHERE id_pegawai='$id'");
    header("Location: pegawai.php");
    exit;
}

$id  = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$id'"));
if (!$row) {
    echo "Data tidak ditemukan.";
    exit;
}

$judul = "Edit Pegawai";
include "header.php";
?>
<h1>Edit Pegawai</h1>
<form action="pegawai-edit.php" method="POST">
    <table class="form">
        <tr>
            <td>ID Pegawai</td>
            <td><input type="number" name="id_pegawai" value="<?= htmlspecialchars($row['id_pegawai']) ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Pegawai</td>
            <td><input type="text" name="nama_pegawai" value="<?= htmlspecialchars($row['nama']) ?>" required></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="number" name="umur" value="<?= htmlspecialchars($row['umur']) ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?= htmlspecialchars($row['alamat']) ?>" required></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><input type="text" name="nomor_hp" value="<?= htmlspecialchars($row['no_hp']) ?>" required></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <label><input type="radio" name="gender" value="Laki-laki" <?= $row['gender'] === 'Laki-laki' ? 'checked' : '' ?>> Laki-laki</label>
                <label><input type="radio" name="gender" value="Perempuan" <?= $row['gender'] === 'Perempuan' ? 'checked' : '' ?>> Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td><input type="text" name="jabatan" value="<?= htmlspecialchars($row['jabatan']) ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
<a class="kembali" href="pegawai.php">&larr; Kembali ke Data Pegawai</a>
<?php include "footer.php"; ?>
