<?php

if(!function_exists('truncate_to_nearest_word'))
{
    /**
     * Trim a string down to length keeping words intact
     * 
     * @param string $value
     * @param int $length
     * @return string
     */
    function truncate_to_nearest_word(string $value, int $length): string
    {
        $parts = explode(' ', $value);

        $value = $parts[0];
        for($i = 1, $count = count($parts); $i < $count; $i++)
        {
            $temp = $value . ' ' . $parts[$i];
            
            if(strlen($temp) > $length)
            {
                break;
            }

            $value = $temp;
        }

        return $value;
    }
}