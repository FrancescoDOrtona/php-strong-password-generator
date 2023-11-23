<?php
$password_length = $_GET["pass-length"] ?? null;

function randomPasswordOfLength(&$password_length)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890.:,;-_*+';
    $password = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $alphabet[$n];
    }
    return implode($password);
}
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
                <input type="number" name="pass-length" id="number">
            </form>
        </div>
        <div class="password">
            <div class="password__text">
                <h3>Password:</h3>
                <strong><?php echo randomPasswordOfLength($password_length) ?></strong>
            </div>
        </div>
    </div>
</body>

</html>