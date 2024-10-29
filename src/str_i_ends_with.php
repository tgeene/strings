<?php

if(!function_exists('str_i_ends_with'))
{
    /**
     * Case-insensitive search for if a string ends with a string
     * 
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    function str_i_ends_with(string $haystack, string $needle): bool
    {
        $needleLength = strlen($needle);
        $haystackEnd = substr($haystack, -$needleLength);
        return (strtolower($haystackEnd) === strtolower($needle));
    }
}