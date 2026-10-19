<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Parkir</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

<?php
$jenis = "Motor"; // Pilihan: "Motor" atau "Mobil"
$lamaJam = 5;

// Hitung tarif parkir
if ($jenis === "Motor") {
    $tarif = 2000 + (($lamaJam > 2) ? ($lamaJam - 2) * 1000 : 0);
} elseif ($jenis === "Mobil") {
    $tarif = 5000 + (($lamaJam > 2) ? ($lamaJam - 2) * 3000 : 0);
} else {
    $tarif = 0;
}
?>

<!-- Kartu Tailwind CSS -->
<div class="w-full max-w-sm bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden font-sans">
    <div class="bg-indigo-600 p-4 text-white">
        <h3 class="text-lg font-bold tracking-wide">Karcis Parkir</h3>
        <p class="text-xs text-indigo-200">Rincian Biaya Parkir Kendaraan</p>
    </div>
    
    <div class="p-5 space-y-3">
        <div class="flex justify-between items-center text-sm">
            <span class="text-gray-500">Jenis Kendaraan</span>
            <span class="font-semibold text-gray-800"><?= $jenis ?></span>
        </div>
        
        <div class="flex justify-between items-center text-sm">
            <span class="text-gray-500">Lama Parkir</span>
            <span class="font-semibold text-gray-800"><?= $lamaJam ?> Jam</span>
        </div>
        
        <hr class="border-dashed border-gray-200 my-2">
        
        <div class="flex justify-between items-center">
            <span class="text-gray-700 font-bold">Total Tarif</span>
            <span class="text-xl font-extrabold text-indigo-600">
                Rp <?= number_format($tarif, 0, ',', '.') ?>
            </span>
        </div>
    </div>
</div>

</body>
</html>