<?php

function randomPasswordOfLength(&$password_length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890.:,;-_*+';
    $password = array();
    $charLength = strlen($characters) - 1;
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, $charLength);
        $password[] = $characters[$n];
    }
    return implode($password);
}