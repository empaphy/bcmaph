<?php

/**
 * @noinspection StaticClosureCanBeUsedInspection
 */

declare(strict_types=1);

use function empaphy\bcmaph\bcgetscale;

describe('bcgetscale()', function () {
    test('throws ValueError if number is not well-formed', function () {
        bcgetscale(my_num: '..');
    })->throws(
        ValueError::class,
        'bcgetscale(): Argument #1 (my_num) is not well-formed',
        0
    );

    test('returns currently set scale', function () {
        bcscale(37);
        $scale = bcgetscale();
        expect($scale)->toEqual(37);

        bcscale(0);
        $scale = bcgetscale();
        expect($scale)->toEqual(0);
    });

    test('returns correct scale for numeric strings', function (array $nums) {
        $expected = 0;
        foreach ($nums as $num) {
            $periodPos = strpos($num, '.');
            if ($periodPos !== false) {
                $expected = max($expected, strlen(substr($num, $periodPos + 1)));
            }
        }

        $scale = bcgetscale(...$nums);

        expect($scale)->toEqual($expected);
    })->with([
        [[ '.']],
        [[ '0']],
        [[ '+']],
        [[ '-']],
        [[ '+0.']],
        [[ '-0.', '+.0', '0']],
    ]);

    test('returns the correct scale for max scale number', function () {
        $num = generate_scaled_bcnum(1, null, \empaphy\bcmaph\BC_MAX_SCALE);
        $scale = bcgetscale($num);

        expect($scale)->toEqual(BC_MAX_SCALE);
    });

    test('returns max scale for > max scale number', function () {
        $num = generate_scaled_bcnum(1, null, \empaphy\bcmaph\BC_MAX_SCALE + 1);
        $scale = bcgetscale($num);

        expect($scale)->toEqual(BC_MAX_SCALE);
    });
});
