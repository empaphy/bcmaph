<?php

declare(strict_types=1);

namespace Empaphy\Maphematics\Number\Arithmetic;

use Empaphy\Maphematics\Number\Fraction;
use Empaphy\Maphematics\Number\ℂ;

class Division implements Fraction
{
    public function __construct($dividend, $divisor) {}

    public static function express() {}

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }

    public function getNumerator(): ℂ
    {
        // TODO: Implement getNumerator() method.
    }

    public function getDenominator(): ℂ
    {
        // TODO: Implement getDenominator() method.
    }

    public function getDividend(): ℂ
    {
        // TODO: Implement getDividend() method.
    }

    public function getDivisor(): ℂ
    {
        // TODO: Implement getDivisor() method.
    }

    public function getRemainder(): ℂ
    {
        // TODO: Implement getRemainder() method.
    }
}
