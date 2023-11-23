<?php
$password_length = $_GET["pass-length"] ?? null;
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
                <input type="number" name="pass-length" id="number">
            </form>
        </div>
    </div>
</body>

</html>