<?php

if(!function_exists('str_i_contains'))
{
    /**
     * Case-insensitive search for if a string contains a string
     * 
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    function str_i_contains(string $haystack, string $needle): bool
    {
        return (stripos($haystack, $needle) !== false);
    }
}