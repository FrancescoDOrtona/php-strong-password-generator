<?php

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