<?php

/**
 * @author       Alwin Garside <alwin@garsi.de>
 *
 * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
 * @copyright    2023 Alwin Garside
 * @license      BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

use Empaphy\Maphematics\Number;
use Empaphy\Maphematics\Set;

/**
 * An integer is the {@see Number} zero (0), a positive {@see NaturalNumber} (1,
 * 2, 3, etc.) or a negative Integer with a minus sign (−1, −2, −3, etc.).
 *
 * The negative numbers are the additive inverses of the corresponding positive
 * numbers.
 *
 * An integer may be regarded as a Rational Number {@see ℝ} that can be written without
 * a fractional component. For example, 21, 4, 0, and −2048 are integers, while
 * 9.75, 5½ and √2 are not. (They can not be written as a quotient of two
 * integers.)
 *
 * The integers form the smallest group and the smallest ring containing the
 * natural numbers. In algebraic number theory, the integers are sometimes
 * qualified as rational integers to distinguish them from the more general
 * algebraic integers. In fact, (rational) integers are algebraic integers that
 * are also rational numbers.
 */
class Integer extends RationalNumber implements ℤ
{
    use Arithmetic, Signed;

    /**
     * String representation of the numeric value of this integer.
     *
     * @readonly
     * @var string
     */
    private string $stringValue;

    /**
     * Represents the denominator of this Rational Number.
     *
     * For Integers, the denominator is always 1.
     *
     * @var \Empaphy\Maphematics\Number\Integer|null
     */
    private ?\Empaphy\Maphematics\Number\Integer $denominator = null;

    /**
     * @param  ℤ|int|string  $value
     */
    public function __construct($value)
    {
        $this->stringValue = (string) $value;
    }

    /**
     * @param  ℤ|int|string  $number
     */
    public static function cast($number): ℤ
    {
        if ($number instanceof ℤ) {
            return $number;
        }

        return new self($number);
    }

    public function getNumerator(): \Empaphy\Maphematics\Number\Integer
    {
        return $this;
    }

    /**
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */

    /**
     * Returns the denominator of this Rational Number.
     *
     * For Integers, the denominator is always 1.
     *
     * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
     */
    public function getDenominator(): \Empaphy\Maphematics\Number\Integer
    {
        if (null === $this->denominator) {
            $this->denominator = new self(1);
        }

        return $this->denominator;
    }

    public function getRemainder(): ℂ
    {
        return new self(0);
    }

    public function ∈(Set $set) {}

    /**
     * Magic method that allows a class to decide how it will react when it is
     * treated like a string.
     *
     * @see https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
     *
     * @return string Returns a string representation of this Integer.
     */
    public function __toString(): string
    {
        return $this->stringValue;
    }
}
