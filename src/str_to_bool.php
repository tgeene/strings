<?php

if(!function_exists('str_to_bool'))
{
    function str_to_bool(string $value, bool $defaultValue): bool
    {
        $value = strtolower($value);
		$validBooleans = [
			0 => false, 1 => true,
			'false' => false, 'true' => true,
			'f' => false, 't' => true,
			'no' => false, 'yes' => true,
			'n' => false, 'y' => true,
		];
		return $validBooleans[$value] ?? $defaultValue;
    }
}