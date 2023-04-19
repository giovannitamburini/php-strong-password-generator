<?php
function showChoice($length)
{
    echo "la lunghezza scelta è {$length}";
}
;

function passwordGenerator($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$%&?^@#°:-_';

    $password = substr(str_shuffle($characters), 0, $length);

    echo "Password generata: {$password}";

    return $password;
}
;