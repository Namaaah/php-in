<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM tb_barang ORDER BY id_barang");
$judul = "Data Barang";
include "header.php";
?>
<h1>Data Barang</h1>
<p><a class="btn" href="barang-input.php">+ Input Barang</a></p>
<table>
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Aksi</th>
    </tr>
    <?php if (mysqli_num_rows($data) === 0): ?>
        <tr><td colspan="6" class="kosong">Belum ada data barang.</td></tr>
    <?php else: $no = 1; while ($r = mysqli_fetch_assoc($data)): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($r['id_barang']) ?></td>
            <td><?= htmlspecialchars($r['nama_barang']) ?></td>
            <td>Rp <?= number_format((int) $r['harga'], 0, ',', '.') ?></td>
            <td><?= htmlspecialchars($r['stock']) ?></td>
            <td class="aksi">
                <a href="barang-edit.php?id=<?= $r['id_barang'] ?>">Edit</a>
                <a href="barang-hapus.php?id=<?= $r['id_barang'] ?>" onclick="return confirm('Hapus barang ini?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; endif; ?>
</table>
<?php include "footer.php"; ?>
