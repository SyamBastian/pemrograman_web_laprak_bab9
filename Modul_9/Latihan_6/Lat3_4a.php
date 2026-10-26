<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit;
}

$cd = $_COOKIE["cd_order"] ?? "0";
$dvd = $_COOKIE["dvd_order"] ?? "0";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <h2>Form Pemesanan CD dan DVD</h2>

    <p>Login sebagai: <?php echo htmlspecialchars($_SESSION["username"]); ?></p>

    <form action="Lat3_4b.php" method="post">
        <p>
            Order CD, amount:
            <input type="number" name="cd_order"
                   value="<?php echo htmlspecialchars($cd); ?>"
                   min="0" required>
        </p>

        <p>
            Order DVD, amount:
            <input type="number" name="dvd_order"
                   value="<?php echo htmlspecialchars($dvd); ?>"
                   min="0" required>
        </p>

        <input type="submit" value="Add To Cart">
    </form>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>