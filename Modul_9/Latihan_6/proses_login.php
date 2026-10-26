<?php
session_start();

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if ($username === "syamganteng" && $password === "admin123") {
    session_regenerate_id(true);

    $_SESSION["login"] = true;
    $_SESSION["username"] = $username;

    header("Location: Lat3_4a.php");
    exit;
} else {
    header("Location: login.php?error=1");
    exit;
}
?>