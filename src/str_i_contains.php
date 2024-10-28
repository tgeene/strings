<?php

if(!function_exists('str_i_contains'))
{
    function str_i_contains(string $haystack, string $needle): bool
    {
        return (stripos($haystack, $needle) !== false);
    }
}