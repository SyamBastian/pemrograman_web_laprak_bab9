<?php
session_start();

if (isset($_SESSION["data"])) {
    $data = $_SESSION["data"];

    echo "<h2>Data Session</h2>";
    echo "Angka: " . $data["angka"] . "<br>";
    echo "Hasil faktorial: " . $data["faktorial"] . "<br>";
    echo "NIM: " . $data["nim"] . "<br>";
    echo "Nama: " . $data["nama"] . "<br>";

    session_unset();
    session_destroy();

    echo "<br>Data session telah dihapus.";
} else {
    echo "Data session tidak ditemukan.";
}
?>