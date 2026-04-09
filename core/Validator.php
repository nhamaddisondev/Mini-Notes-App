<?php

// Purpose: Provides reusable validation rules for strings and email inputs.
namespace Core;

/**
 * Provides static validation methods for common input types.
 */
class Validator
{
    /**
     * Validate that a string value meets minimum and maximum length requirements.
     *
     * @param mixed  $value The value to validate.
     * @param int    $min   Minimum length (default 1).
     * @param int    $max   Maximum length (default INF).
     * @return bool  True if the value is a string within the allowed range.
     */
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    /**
     * Validate that a value is a properly formatted email address.
     *
     * @param mixed $value The value to validate.
     * @return bool True if the value is a valid email.
     */
    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}
