<?php
//Tugas 7
define('PHI', 3.14);
define('SETENGAH', 0.5);
// 1. Luas Persegi (s * s)
$sisi = 10;
$luas_persegi = $sisi * $sisi;
echo "Luas Persegi = ". $luas_persegi;
echo "<br/>";

// 2.Luas Segitiga (1/2 * a * t)
$alas = 12;
$tinggi = 6;
$luas_segitiga = (SETENGAH * $alas * $tinggi);
echo "Luas Segitiga = ". $luas_segitiga;
echo "<br/ >";

// 3. Luas Trapesium (1/2 * jumlah sisi sejajart * t)
$sisi1 = 8;
$sisi2 = 6;
$tinggi = 4;
$luas_trapesium = (SETENGAH * ($sisi1 + $sisi2) * $tinggi );
echo "Luas Trapesium = ". $luas_trapesium;
echo "<br/>";

// 4. Luas Permukaan Tabung (2 * phi * r * (r + t))
$jari2 = 5;
$tinggi = 5;
$luas_permukaan_tabung = (2 * PHI * $jari2 * ($jari2 + $tinggi));
echo "Luas Permukaan Tabung = ". $luas_permukaan_tabung;
echo "<br/>";

// 5. Luas Permukaan Bola ( 4 * phi *r *r *t)
$jari2 = 10;
$tinggi = 5;
$luas_permukaan_bola = ( 4 * PHI * $jari2**2 * $tinggi);
echo "Luas Permukaan Bola = ". $luas_permukaan_bola;
echo "<br/>";
?>