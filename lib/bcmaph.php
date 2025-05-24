<?php

declare(strict_types=1);

if (! defined('BC_MAX_SCALE')) {

    define('BC_MAX_SCALE', 0x7FFFFFFF);

}

if (! function_exists('bcabs')) {

    /**
     * Returns the absolute value of an arbitrary precision number.
     *
     * The absolute value of a number __num__ is the non-negative value of
     * __num__ without regard to its sign. Namely, __num__ if __num__ is a
     * positive number, and -__num__ if __num__ is negative (in which case
     * negating __num__ makes -__num__ positive).
     *
     * For example, the absolute value of `3` is `3`, and the absolute value
     * of `−3` is also `3`. The absolute value of a number may be thought of
     * as its distance from zero.
     *
     * @param  numeric-string  $num
     *   The number to get the absolute value of.
     *
     * @param  int<0,2147483647>|null  $scale
     *   The number of digits after the decimal place in the result. If omitted,
     *   it will default to the scale set globally with the {@see bcscale()}
     *   function, or fallback to 0 if this has not been set.
     *
     * @return numeric-string
     *   The absolute value of __num__.
     */
    function bcabs(string $num, ?int $scale = null): string
    {
        return \empaphy\bcmaph\bcabs($num, $scale);
    }

}

if (! function_exists('bcceil')) {

    /**
     * Round an arbitrary precision number up.
     *
     * Returns the next highest integer value within the provided __scale__
     * by rounding up __num__ if necessary.
     *
     * @param  numeric-string  $num
     *   The value to round.
     *
     * @param  int<0,2147483647>|null  $scale
     *   The number of digits after the decimal place to consider. If omitted,
     *   it will default to the scale of __num__.
     *
     * @return numeric-string
     *   __num__ rounded up to the next highest integer. The return value of
     *   {@see bcceil()} is still of type string as the value range may be
     *   bigger than that of `int`.
     */
    function bcceil(string $num, ?int $scale = null): string
    {
        return \empaphy\bcmaph\bcceil($num, $scale);
    }

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
     *   Returns the highest scale value encountered for the provided __nums__,
     *   or the current global scale factor if no number is provided.
     *
     * @throws ValueError if any number in **nums** is not well-formed.
     */
    function bcgetscale(string ...$nums): int
    {
        return \empaphy\bcmaph\bcgetscale(...$nums);
    }

}
