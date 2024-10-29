<?php

if(!function_exists('str_after_str'))
{
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