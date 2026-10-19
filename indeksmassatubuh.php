<?php
$berat = 65; // dalam kg
$tinggi = 1.70; // dalam meter

$bmi = $berat / ($tinggi * $tinggi);

if ($bmi < 18.5) {
    $kategori = "Kurus";
} elseif ($bmi <= 24.9) {
    $kategori = "Normal";
} elseif ($bmi <= 29.9) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
}

echo "BMI: " . number_format($bmi, 1, ',', '.') . " ($kategori)";
?>