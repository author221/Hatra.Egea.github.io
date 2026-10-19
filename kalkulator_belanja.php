<?php
$namaBarang = "Kopi Susu";
$harga = 18000;
$jumlah = 3;

$totalHarga = $harga * $jumlah;

echo "Total Harga $namaBarang: Rp " . number_format($totalHarga, 0, ',', '.');
?>