<?php

declare(strict_types=1);

if (! defined('BC_MAX_SCALE')) {

    define('BC_MAX_SCALE', \empaphy\bcmaph\BC_MAX_SCALE);

}

if (! function_exists('bcgetscale')) {

    /**
     * Deduce the scale of arbitrary precision numbers.
     *
     * Returns the highest scale value for the provided **nums** based on the
     * number of digits trailing the period (even zeroes), or the global scale
     * value if no number is provided.
     *
     * @param  numeric-string  ...$nums
     *   The values from which to deduce the highest scale.
     *
     * @return int<0, 2147483647>
     *   The highest scale value encountered for the provided
     */
    function bcgetscale(string ...$nums): int
    {
        return \empaphy\bcmaph\bcgetscale(...$nums);
    }

}
