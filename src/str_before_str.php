<?php

if(!function_exists('str_before_str'))
{
    /**
     * Find string value before the first instance of a string
     * 
     * @param string $haystack
     * @param string $needle
     * @param bool $caseInsensitive (Default: true)
     * @return string|false
     */
    function str_before_str(string $haystack, string $needle, bool $caseInsensitive = true): string|false
    {
        $function = $caseInsensitive ? 'stripos' : 'strpos';
        
        $position = $function($haystack, $needle);
        if($position === false)
        {
            return false;
        }

        return substr($haystack, 0, $position);
    }
}