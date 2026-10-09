<?php
$halaman = basename($_SERVER['PHP_SELF']);
function menu_aktif($file, $halaman)
{
    return $file === $halaman ? ' class="aktif"' : '';
}
?>
<nav class="menu">
    <div class="brand">
        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M3 9l1.5-5h15L21 9"/>
            <path d="M3 9h18v11H3z"/>
            <path d="M3 9a3 3 0 0 0 6 0 3 3 0 0 0 6 0 3 3 0 0 0 6 0"/>
            <path d="M9 20v-6h6v6"/>
        </svg>
        <span>Toko</span>
    </div>
    <a href="index.php"<?= menu_aktif('index.php', $halaman) ?>>Dashboard</a>
    <a href="barang.php"<?= menu_aktif('barang.php', $halaman) ?>>Barang</a>
    <a href="pegawai.php"<?= menu_aktif('pegawai.php', $halaman) ?>>Pegawai</a>
    <a href="pelanggan.php"<?= menu_aktif('pelanggan.php', $halaman) ?>>Pelanggan</a>
    <a href="transaksi.php"<?= menu_aktif('transaksi.php', $halaman) ?>>Transaksi</a>
</nav>
