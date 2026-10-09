<?php
$judul = isset($judul) ? $judul : 'Toko';
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($judul) ?> - Dashboard Toko</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include __DIR__ . "/menu.php"; ?>
<main>
