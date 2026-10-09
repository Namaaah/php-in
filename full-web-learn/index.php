<?php
include "koneksi.php";

$jml_barang  = (int) mysqli_fetch_row(mysqli_query($koneksi, "SELECT COUNT(*) FROM tb_barang"))[0];
$jml_pegawai = (int) mysqli_fetch_row(mysqli_query($koneksi, "SELECT COUNT(*) FROM pegawai"))[0];

$barang  = mysqli_query($koneksi, "SELECT * FROM tb_barang ORDER BY id_barang DESC LIMIT 5");
$pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai ORDER BY id_pegawai DESC LIMIT 5");

$judul = "Dashboard";
include "header.php";
?>
<h1>Dashboard</h1>

<div class="cards">
    <div class="card">
        <div class="angka"><?= $jml_barang ?></div>
        <div class="label">Total Barang</div>
    </div>
    <div class="card">
        <div class="angka"><?= $jml_pegawai ?></div>
        <div class="label">Total Pegawai</div>
    </div>
</div>

<h2>Barang Terbaru</h2>
<table>
    <tr><th>ID</th><th>Nama Barang</th><th>Harga</th><th>Stock</th></tr>
    <?php if (mysqli_num_rows($barang) === 0): ?>
        <tr><td colspan="4" class="kosong">Belum ada data barang.</td></tr>
    <?php else: while ($r = mysqli_fetch_assoc($barang)): ?>
        <tr>
            <td><?= htmlspecialchars($r['id_barang']) ?></td>
            <td><?= htmlspecialchars($r['nama_barang']) ?></td>
            <td>Rp <?= number_format((int) $r['harga'], 0, ',', '.') ?></td>
            <td><?= htmlspecialchars($r['stock']) ?></td>
        </tr>
    <?php endwhile; endif; ?>
</table>

<h2>Pegawai Terbaru</h2>
<table>
    <tr><th>ID</th><th>Nama</th><th>Jabatan</th><th>No HP</th></tr>
    <?php if (mysqli_num_rows($pegawai) === 0): ?>
        <tr><td colspan="4" class="kosong">Belum ada data pegawai.</td></tr>
    <?php else: while ($r = mysqli_fetch_assoc($pegawai)): ?>
        <tr>
            <td><?= htmlspecialchars($r['id_pegawai']) ?></td>
            <td><?= htmlspecialchars($r['nama']) ?></td>
            <td><?= htmlspecialchars($r['jabatan']) ?></td>
            <td><?= htmlspecialchars($r['no_hp']) ?></td>
        </tr>
    <?php endwhile; endif; ?>
</table>

<?php include "footer.php"; ?>
