<?php

function get_random_string($length)
{
    $array = array(
        0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    );

    $text = '';

    $length = rand(4, $length);

    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, 35);
        $text .= $array[$random];
    }
    return $text;
}
