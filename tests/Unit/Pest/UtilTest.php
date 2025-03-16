<?php

declare(strict_types=1);

describe('generate_scaled_bcnum()', function () {
    test('generate scaled number without $prefix', function () {
        $num = generate_scaled_bcnum(123);
        expect($num)->toEqual('123.');
    });

    test('generate scaled number without $scale', function () {
        $num = generate_scaled_bcnum(123, 789);
        expect($num)->toEqual('123.789');
    });

    test('generate scaled number with $scale', function () {
        $num = generate_scaled_bcnum(123, 789, 6);
        expect($num)->toEqual('123.000789');
    });
});
