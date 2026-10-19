<?php
$totalBelanja = 600000;
$persenDiskon = 0;

$besarDiskon = $totalBelanja * $persenDiskon;
$totalBayar = $totalBelanja - $besarDiskon;

if ($totalBelanja >= 500000) {
    $persenDiskon = 0.15;
} elseif ($totalBelanja >= 200000) {
    $persenDiskon = 0.10;
}

echo "Total Awal: Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Besar Diskon: Rp " . number_format($besarDiskon, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.');
?>