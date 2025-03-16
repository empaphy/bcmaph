<?php

declare(strict_types=1);

namespace empaphy\bcmaph;

use ValueError;
use function bcscale;
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
