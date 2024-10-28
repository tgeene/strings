<?php

if(!function_exists('str_i_starts_with'))
{
    function str_i_starts_with(string $haystack, string $needle): bool
    {
        $needleLength = strlen($needle);
        $haystackStart = substr($haystack, 0, $needleLength);
        return (strtolower($haystackStart) === strtolower($needle));
    }
}