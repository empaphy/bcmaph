<?php

declare(strict_types=1);

namespace empaphy\bcmaph;

use ValueError;

use function bccomp;
use function bcscale;
use function bcsub;
use function max;
use function preg_match;
use function strlen;
use function strpos;

/**
 * The maximum number of decimal digits that BCMath supports.
 */
const BC_MAX_SCALE = 0x7FFFFFFF;

/**
 * Well-formed BCMath numbers are strings that match this regular expression.
 */
const BC_NUM_PATTERN = '/^[+-]?[0-9]*(\.[0-9]*)?$/';

/**
 * Returns the absolute value of an arbitrary precision number.
 *
 * The absolute value of a number __num__ is the non-negative value of __num__
 * without regard to its sign. Namely, __num__ if __num__ is a positive number,
 * and -__num__ if __num__ is negative (in which case negating __num__ makes
 * -__num__ positive).
 *
 * For example, the absolute value of `3` is `3`, and the absolute value of
 * `−3` is also `3`. The absolute value of a number may be thought of as its
 * distance from zero.
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
 *
 * @throws ValueError in the following cases:
 *   - __num__ is not a well-formed BCMath numeric string.
 *   - __scale__ is outside the valid range.
 */
function bcabs(string $num, ?int $scale = null): string
{
    if (null !== $scale && ($scale < 0 || $scale > BC_MAX_SCALE)) {
        throw new ValueError(
            __FUNCTION__ . '(): Argument #2 ($scale) must be between 0 and '
            . BC_MAX_SCALE
        );
    }

    return bccomp($num, '0', $scale) < 1 ? bcsub('0', $num, $scale) : $num;
}

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
 *   Returns the highest scale value encountered for the provided **nums**,
 *   or the current global scale factor if no number is provided.
 *
 * @throws ValueError if any number in **nums** is not well-formed.
 */
function bcgetscale(string ...$nums): int
{
    if (empty($nums)) {
        return bcscale();
    }

    $scales = [0];
    $i = 0;
    foreach ($nums as $name => $num) {
        $i++;

        if (! preg_match(BC_NUM_PATTERN, $num)) {
            throw new ValueError(
                __FUNCTION__ . "(): Argument #{$i} ({$name}) is not well-formed"
            );
        }

        $periodPos = strpos($num, '.');
        if (false !== $periodPos) {
            // Count the number of digits to deduce what the current scale is.
            $scale = strlen($num) - $periodPos - 1;
            if ($scale > BC_MAX_SCALE) {
                return BC_MAX_SCALE;
            }
            $scales[] = $scale;
        }
    }

    return max($scales);
}
