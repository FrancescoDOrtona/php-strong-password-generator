<?php
include __DIR__ . '/partials/functions.php';
$password_length = $_GET["pass-length"] ?? null;

// var_dump(randomPasswordOfLength($password_length));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Password Generator</h1>
            <p>Chose a number for the password length desired</p>
        </header>
        <div class="form-section">
            <form action="" method="get">
                <input type="number" name="pass-length" min="0" id="number" placeholder="Number">
                <input type="submit" value="Generate" id="submit">
                <p class="password-length">Password length: <?php echo $password_length ?></p>
            </form>
        </div>
        <div class="password">
            <div class="password__text">
                <h3>Password:</h3>
                <strong><?php echo randomPasswordOfLength($password_length); ?></strong>
            </div>
        </div>
    </div>
</body>

</html>