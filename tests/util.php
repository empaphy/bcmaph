<?php

declare(strict_types=1);

namespace empaphy\bcmaph\tests;

use DomainException;
use function number_format;
use function str_repeat;
use function strlen;

/**
 * @param  int                $prefix
 * @param  int|null           $suffix
 * @param  positive-int|null  $scale
 * @return numeric-string
 */
function generate_scaled_bcnum(
    int $prefix = 0,
    ?int $suffix = null,
    ?int $scale = null,
): string {
    // Convert the base to a numeric string.
    $pre = number_format($prefix, 0, '', '');

    $suf = null === $suffix ? '' : number_format($suffix, 0, '', '');

    // If no scale is given, just return $num with the $suffix.
    if (null === $scale) {
        return "{$pre}.{$suf}";
    }
    $preLength = strlen($pre);
    $sufLength = strlen($suf);

    if ($sufLength > $scale) {
        throw new DomainException(
            "Length of suffix `{$suf}` doesn't fit in scale `{$scale}`",
        );
    }

    $len = $preLength + 1 + $scale;

    // Generate a string with enough zeroes.
    $scaled = str_repeat('0', $len);

    for ($i = 0; $i < $preLength; $i++) {
        $scaled[$i] = $pre[$i];
    }

    $scaled[$preLength] = '.';

    $sufStart = $len - $sufLength;
    for ($i = 0; $i < $sufLength; $i++) {
        $scaled[$sufStart + $i] = $suf[$i];
    }

    return $scaled;
}

