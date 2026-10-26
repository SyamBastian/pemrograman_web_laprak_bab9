<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["cd_order"]) && isset($_POST["dvd_order"])) {
    $cd = max(0, (int) $_POST["cd_order"]);
    $dvd = max(0, (int) $_POST["dvd_order"]);

    setcookie("cd_order", (string) $cd, 0, "/Modul_9_Cookie_Session/Latihan_6/");
    setcookie("dvd_order", (string) $dvd, 0, "/Modul_9_Cookie_Session/Latihan_6/");

    $_SESSION["cd_order"] = $cd;
    $_SESSION["dvd_order"] = $dvd;

    header("Location: Lat3_4c.php");
    exit;
}

header("Location: Lat3_4a.php");
exit;
?>