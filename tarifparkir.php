<?php
$jenis = "Motor"; // "Motor" atau "Mobil"
$lamaJam = 5;

if ($jenis === "Motor") {
    $tarif = 2000 + (($lamaJam > 2) ? ($lamaJam - 2) * 1000 : 0);
} elseif ($jenis === "Mobil") {
    $tarif = 5000 + (($lamaJam > 2) ? ($lamaJam - 2) * 3000 : 0);
}

echo '
<div class="max-w-sm p-5 bg-white border border-gray-200 rounded-lg shadow-md font-sans">
    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Tiket Parkir</h5>
    <p class="font-normal text-gray-700">Kendaraan: <strong>' . $jenis . '</strong></p>
    <p class="font-normal text-gray-700 mb-4">Lama Parkir: <strong>' . $lamaJam . ' Jam</strong></p>
    <div class="pt-3 border-t border-gray-200">
        <p class="text-lg font-bold text-blue-600">Total: Rp ' . number_format($tarif, 0, ',', '.') . '</p>
    </div>
</div>
';
?>