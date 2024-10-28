<?php

if(!function_exists('str_i_ends_with'))
{
    function str_i_ends_with(string $haystack, string $needle): bool
    {
        $needleLength = strlen($needle);
        $haystackEnd = substr($haystack, -$needleLength);
        return (strtolower($haystackEnd) === strtolower($needle));
    }
}