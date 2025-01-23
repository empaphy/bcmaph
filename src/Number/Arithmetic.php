<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

use Empaphy\Maphematics\Number;

trait Arithmetic
{
    public static function fraction($dividend, $divisor): Decimal
    {
        return Decimal::divide($dividend, $divisor);
    }

    /**
     * @param  ℂ|int|string  ...$addends
     * @return ℂ
     */
    public function ✚(...$addends): ℂ
    {
        return self::sum(...$addends);
    }

    /**
     * @param  Number|int|string  $augend
     * @param  Number|int|string  ...$addends
     * @return Number
     */
    public static function sum($augend, ...$addends): Number
    {
        // TODO
    }

    /**
     * @param  Number|int|string  $subtrahend
     * @return Number
     */
    public function −($subtrahend): Number
    {
        return self::difference($this, $subtrahend);
    }

    /**
     * @param  Number|int|string  $minuend
     * @param  Number|int|string  $subtrahend
     * @return Number
     */
    public static function difference($minuend, $subtrahend): Number
    {
        // TODO
    }

    /**
     * @param  Number|int|string  $multiplicand
     * @return Number
     */
    public function ×($multiplicand): Number
    {
        return self::product($this, $multiplicand);
    }

    public static function product($multiplier, $multiplicand): Number
    {
        // TODO
    }

    /**
     * @param  Number|int|string  $divisor
     * @return Number
     */
    public function ÷($divisor): Number
    {
        // TODO
    }
}
