<?php

if(!function_exists('str_to_bool'))
{
    /**
     * Converts strings into a boolean value
     * 
     * @param string $value
     * @param bool $defaultValue (Default: false)
     * @return bool
     */
    function str_to_bool(string $value, bool $defaultValue = false): bool
    {
        $value = strtolower($value);
		$validBooleans = [
			'false' => false, 'true' => true,
			'f' => false, 't' => true,
			'no' => false, 'yes' => true,
			'n' => false, 'y' => true,
		];
		return $validBooleans[$value] ?? $defaultValue;
    }
}