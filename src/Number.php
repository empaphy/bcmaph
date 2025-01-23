<?php

/**
 * @author       Alwin Garside <alwin@garsi.de>
 *
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @copyright    2023 Alwin Garside
 * @license      BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics;

use Empaphy\Maphematics\Number\Decimal;
use Empaphy\Maphematics\Number\Integer;
use Empaphy\Maphematics\Number\Sign;
use Empaphy\Maphematics\Number\ℂ;
use Empaphy\Maphematics\Number\ℕ;
use Empaphy\Maphematics\Number\ℚ;
use Empaphy\Maphematics\Number\ℝ;
use Empaphy\Maphematics\Number\ℤ;
use InvalidArgumentException;

/**
 * A Number is a {@see MathematicalObject mathematical object} used to count,
 * measure, and label.
 */
abstract class Number implements MathematicalObject, ℂ
{
    /**
     * Checks whether the given value is a complex number.
     *
     * @param  ℚ|int|float|string  $number
     */
    public static function isComplex($number): bool
    {
        return $number instanceof ℂ
            || is_int($number)
            || is_float($number)
            || ( // TODO: improve
                is_string($number) && ctype_digit(str_replace('.', '', $number))
            );
    }

    public static function getType($number): string
    {
        if (self::isNatural($number)) {
            return ℕ::class;
        }

        if (self::isInteger($number)) {
            return ℤ::class;
        }

        if (self::isRational($number)) {
            return ℚ::class;
        }

        if (self::isReal($number)) {
            return ℝ::class;
        }

        return ℂ::class;
    }

    /**
     * Checks whether the given value is a natural number.
     *
     * @param  ℕ|int|string  $number
     */
    public static function isNatural($number): bool
    {
        return $number instanceof ℕ
            || (is_int($number) && $number >= 0)
            || (is_string($number) && ctype_digit($number));
    }

    /**
     * Checks whether the given value is an integer number.
     *
     * @param  ℤ|int|string  $number
     */
    public static function isInteger($number): bool
    {
        return $number instanceof ℤ
            || is_int($number)
            || (is_string($number) && ctype_digit($number));
    }

    /**
     * Checks whether the given value is a rational number.
     *
     * @param  ℚ|int|float|string  $number
     */
    public static function isRational($number): bool
    {
        // TODO: needs to check if number is fraction of two integers
        return $number instanceof ℚ
            || is_int($number)
            || is_float($number)
            || ( // TODO: improve
                is_string($number)
                && ctype_digit(str_replace('.', '', ltrim($number, '-')))
            );
    }

    /**
     * Checks whether the given value is a real number.
     *
     * @param  ℚ|int|float|string  $number
     */
    public static function isReal($number): bool
    {
        return $number instanceof ℝ
            || is_int($number)
            || is_float($number)
            || ( // TODO: improve
                is_string($number)
                && ctype_digit(str_replace('.', '', ltrim($number, '-')))
            );
    }

    /**
     * @param  ℂ|int|float|string  $number
     */
    public static function cast($number): ℂ
    {
        if ($number instanceof ℂ) {
            return $number;
        }

        if (self::isInteger($number)) {
            return new Integer($number);
        }

        if (self::isRational($number)) {
            return new Decimal($number);
        }

        throw new InvalidArgumentException("Cannot cast to Number: {$number}");
    }

    /**
     * Returns the sign for this Number.
     *
     * @return Sign
     */
    abstract public function getSign(): Sign;
}
