<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM pegawai ORDER BY id_pegawai");
$judul = "Data Pegawai";
include "header.php";
?>
<h1>Data Pegawai</h1>
<p><a class="btn" href="pegawai-input.php">+ Input Pegawai</a></p>
<table>
    <tr>
        <th>No</th>
        <th>Nama Pegawai</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Gender</th>
        <th>Jabatan</th>
        <th>Aksi</th>
    </tr>
    <?php if (mysqli_num_rows($data) === 0): ?>
        <tr><td colspan="8" class="kosong">Belum ada data pegawai.</td></tr>
    <?php else: $no = 1; while ($r = mysqli_fetch_assoc($data)): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($r['nama']) ?></td>
            <td><?= htmlspecialchars($r['umur']) ?></td>
            <td><?= htmlspecialchars($r['alamat']) ?></td>
            <td><?= htmlspecialchars($r['no_hp']) ?></td>
            <td><?= htmlspecialchars($r['gender']) ?></td>
            <td><?= htmlspecialchars($r['jabatan']) ?></td>
            <td class="aksi">
                <a href="pegawai-edit.php?id=<?= $r['id_pegawai'] ?>">Edit</a>
                <a href="pegawai-hapus.php?id=<?= $r['id_pegawai'] ?>" onclick="return confirm('Hapus pegawai ini?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; endif; ?>
</table>
<?php include "footer.php"; ?>
