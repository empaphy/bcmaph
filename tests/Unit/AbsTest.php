<?php

/**
 * @noinspection StaticClosureCanBeUsedInspection
 */

declare(strict_types=1);

use function empaphy\bcmaph\bcabs;

describe('bcabs()', function () {
    test('throws ValueError with invalid scale', function ($num, $scale) {
        bcabs($num, $scale);
    })->throws(
        ValueError::class
    )->with([
        ['0', -1],
        ['0', BC_MAX_SCALE + 1],
    ]);

    test('returns absolute value', function ($num, $scale, $expected) {
        $abs = bcabs($num, $scale);
        expect($abs)->toBe($expected);
    })->with([
         '0'     => [ '0',     0, '0'     ],
        '-0'     => ['-0',     0, '0'     ],
         '1'     => [ '1',     0, '1'     ],
        '-1'     => ['-1',     0, '1'     ],
         '0.000' => [ '0.000', 3, '0.000' ],
        '-0.000' => ['-0.000', 3, '0.000' ],
         '1.000' => [ '1.000', 3, '1.000' ],
        '-1.000' => ['-1.000', 3, '1.000' ],
    ]);
});
