<?php
session_start();
include __DIR__ . '/partials/functions.php';
$password_length = $_SESSION['pass-length'];
// var_dump($_SESSION['pass-length']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body class="center">
    <div class="container">
        <header>
            <div class="password">
                <div class="password__text">
                    <h3>Password:</h3>
                    <strong><?php echo randomPasswordOfLength($password_length); ?></strong>
                </div>
            </div>
        </header>
    </div>
</body>
</html>