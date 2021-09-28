<?php
//Tugas 7
define('PHI', 3.14);
define('SETENGAH', 0.5);
// 1. Luas Persegi (s * s)
$sisi = 10;
$luas_persegi = $sisi * $sisi;
// echo "Luas Persegi = ". $luas_persegi;
// echo "<br/>";

// 2.Luas Segitiga (1/2 * a * t)
$alas = 12;
$tinggi = 6;
$luas_segitiga = (SETENGAH * $alas * $tinggi);
// echo "Luas Segitiga = ". $luas_segitiga;
// echo "<br/ >";

// 3. Luas Trapesium (1/2 * jumlah sisi sejajart * t)
$sisi1 = 8;
$sisi2 = 6;
$tinggi = 4;
$luas_trapesium = (SETENGAH * ($sisi1 + $sisi2) * $tinggi );
// echo "Luas Trapesium = ". $luas_trapesium;
// echo "<br/>";

// 4. Luas Permukaan Tabung (2 * phi * r * (r + t))
$jari2 = 5;
$tinggi = 5;
$luas_permukaan_tabung = (2 * PHI * $jari2 * ($jari2 + $tinggi));
// echo "Luas Permukaan Tabung = ". $luas_permukaan_tabung;
// echo "<br/>";

// 5. Luas Permukaan Bola ( 4 * phi *r *r *t)
$jari2 = 10;
$tinggi = 5;
$luas_permukaan_bola = ( 4 * PHI * $jari2**2 * $tinggi);
// echo "Luas Permukaan Bola = ". $luas_permukaan_bola;
// echo "<br/>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus dan Perhitungan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div id="fitur" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col col-12 py-3">
                    <div class="card text-center py-4">
                        <div class="card-body">
                            <h3 class="card-title">Rumus Luas Bangun</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-square"></i>
                            </div>
                            <h5 class="card-title">Luas Persegi</h5>
                            <p class="card-text"><?= $luas_persegi?> cm<sup>2</sup></p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-triangle"></i>
                            </div>
                            <h5 class="card-title">Luas Segitiga</h5>
                            <p class="card-text"><?= $luas_segitiga?> cm<sup>2</sup></p>

                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-hexagon"></i>
                            </div>
                            <h5 class="card-title">Luas Trapesium</h5>
                            <p class="card-text"><?= $luas_trapesium?> cm<sup>2</sup></p>
                        </div>
                    </div>
                </div>
                <div class="col col-6 py-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-pentagon"></i>
                            </div>
                            <h5 class="card-title">Luas Permukaan Tabung</h5>
                            <p class="card-text"><?= $luas_permukaan_tabung?> cm<sup>2</sup></p>
                        </div>
                    </div>
                </div>
                <div class="col col-6 py-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-circle"></i>
                            </div>
                            <h5 class="card-title">Luas Permukaan Bola</h5>
                            <p class="card-text"><?= $luas_permukaan_bola?> cm<sup>2</sup></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"     integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"     crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"   integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"   crossorigin="anonymous"></script>
    
</body>
</html>