<?php
$jenis = "Motor"; // "Motor" atau "Mobil"
$lamaJam = 5;

if ($jenis === "Motor") {
    $tarif = 2000 + (($lamaJam > 2) ? ($lamaJam - 2) * 1000 : 0);
} elseif ($jenis === "Mobil") {
    $tarif = 5000 + (($lamaJam > 2) ? ($lamaJam - 2) * 3000 : 0);
}

echo '
<h2>Tiket Parkir</h2>
<p>Kendaraan: <strong>' . $jenis . '</strong></p>
<p>Lama Parkir: <strong>' . $lamaJam . ' Jam</strong></p>
<p><strong>Total: Rp ' . number_format($tarif, 0, ',', '.') . '</strong></p>
';
?>