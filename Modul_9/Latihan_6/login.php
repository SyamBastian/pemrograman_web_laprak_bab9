<!DOCTYPE html>
<html>
<head>
    <title>Login Pemesanan CD dan DVD</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            width: 320px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 7px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1d4ed8;
        }

        .error {
            background-color: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fca5a5;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 16px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>

        <?php
        if (isset($_GET["error"])) {
            echo '<div class="error">
                Username atau password salah. Silakan coba lagi.
            </div>';
        }
        ?>

        <form action="proses_login.php" method="post">
            <label for="username">Username</label>
            <input
                type="text"
                name="username"
                id="username"
                placeholder="Masukkan username"
                required
            >

            <label for="password">Password</label>
            <input
                type="text"
                name="password"
                id="password"
                placeholder="Masukkan password"
                required
            >

            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>