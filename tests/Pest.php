<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

// uses(Tests\TestCase::class)->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

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
