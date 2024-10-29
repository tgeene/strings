<?php

if(!function_exists('str_before_str'))
{
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