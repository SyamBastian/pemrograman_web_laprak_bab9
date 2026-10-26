<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit;
}

$cd = $_SESSION["cd_order"] ?? ($_COOKIE["cd_order"] ?? "0");
$dvd = $_SESSION["dvd_order"] ?? ($_COOKIE["dvd_order"] ?? "0");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
</head>
<body>
    <h2>Order Summary</h2>

    <p>Login sebagai: <?php echo htmlspecialchars($_SESSION["username"]); ?></p>

    <p>Ordered CD: <?php echo htmlspecialchars((string) $cd); ?> pieces</p>
    <p>Ordered DVD: <?php echo htmlspecialchars((string) $dvd); ?> pieces</p>

    <p><a href="Lat3_4a.php">Edit Pesanan</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>