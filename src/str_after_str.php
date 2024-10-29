<?php

if(!function_exists('str_after_str'))
{
    /**
     * Find string value after the first instance of a string
     * 
     * @param string $haystack
     * @param string $needle
     * @param bool $caseInsensitive (Default: true)
     * @return string|false
     */
    function str_after_str(string $haystack, string $needle, bool $caseInsensitive = true): string|false
    {
        $function = $caseInsensitive ? 'stripos' : 'strpos';
        
        $position = $function($haystack, $needle);
        if($position === false)
        {
            return false;
        }

        $needleLength = strlen($needle);
        return substr($haystack, ($position + $needleLength));
    }
}