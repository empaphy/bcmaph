<?php

/**
 * @noinspection StaticClosureCanBeUsedInspection
 */

declare(strict_types=1);

namespace empaphy\bcmaph\tests;

use ValueError;

use function empaphy\bcmaph\bcceil;
use function generate_scaled_bcnum;

use const empaphy\bcmaph\BC_MAX_SCALE;

describe('bcceil()', function () {
    test('rounds an arbitrary precision number up', function (string $num, ?int $scale, string $expected) {
        expect(bcceil($num, $scale))->toEqual($expected);
    })->with([
         0 => [ '0',      0,  '0' ],
         1 => ['-0',      0, '-0' ],
         2 => [ '1',      0,  '1' ],
         3 => ['-1',      0, '-1' ],
         4 => [ '0.1234', 4,  '1' ],
         5 => [ '0.1234', 3,  '1' ],
         6 => [ '0.0004', 4,  '1' ],
         7 => [ '0.0004', 3,  '0' ],
         8 => ['-0.1234', 4, '-1' ],
         9 => ['-0.1234', 3, '-1' ],
        10 => ['-0.0004', 4, '-1' ],
        11 => ['-0.0004', 3, '-0' ],
    ]);

    test('rounds large arbitrary precision numbers up', function () {
        $ceil = bcceil(generate_scaled_bcnum(0, 1, BC_MAX_SCALE - 1), BC_MAX_SCALE - 1);
        expect($ceil)->toEqual('1');

        $ceil = bcceil(generate_scaled_bcnum(0, 1, BC_MAX_SCALE - 1), BC_MAX_SCALE);
        expect($ceil)->toEqual('1');
    });

    /**
     * @dataProvider invalid_scales
     *
     * @param  negative-int | int<2147483648, 2147483648>  $scale
     * @return void
     */
    test('value_error', function (int $scale): void {
        $this->expectException(ValueError::class);

        bcceil('0.1234', $scale);
    })->with([
        'negative scale'                 => [-1],
        'scale greater than BC_MA_SCALE' => [BC_MAX_SCALE + 1],
    ]);
});
