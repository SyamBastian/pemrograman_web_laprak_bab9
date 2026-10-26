<?php
session_start();

function faktorial($angka) {
    $hasil = 1;

    for ($i = 1; $i <= $angka; $i++) {
        $hasil = $hasil * $i;
    }

    return $hasil;
}

$angka = (int) $_POST["angka"];
$hasil = faktorial($angka);

$data = array(
    "angka" => $angka,
    "faktorial" => $hasil,
    "nim" => "255150601111035",
    "nama" => "Syam Bastian Firstantyo"
);

$_SESSION["data"] = $data;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Faktorial</title>
</head>
<body>
    <h2>Hasil Perhitungan Faktorial</h2>

    Angka yang dimasukkan: <?php echo $angka; ?><br>
    Hasil faktorial: <?php echo $hasil; ?><br><br>

    <a href="Lat3_3c.php">Lihat Data Session</a>
</body>
</html>
