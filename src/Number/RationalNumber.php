<?php

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

use Empaphy\Maphematics\Number\Arithmetic\Dividend;
use Empaphy\Maphematics\Number\Arithmetic\Divisor;

/**
 * A rational number is a number that can be expressed as the quotient or
 * fraction of two integers, a numerator and a non-zero denominator.
 *
 * The numerator represents a number of equal parts, and the denominator
 * indicates how many of those parts make up a unit or a whole.
 */
abstract class RationalNumber extends ComplexNumber implements Fraction
{
    /**
     * Returns the {@see Numerator} of this Rational Number when represented as
     * a {@see Fraction}.
     *
     * The Numerator is the number of equal parts of the whole.
     */
    abstract public function getNumerator(): ℤ;

    /**
     * Returns the {@see Denominator} of this Rational Number when represented
     * as a {@see Fraction}.
     *
     * The Denominator is the number of equal parts that make up the whole.
     */
    abstract public function getDenominator(): ℤ;

    /**
     * Returns the {@see Dividend} of this Rational Number when interpreted as a
     * quotient.
     *
     * The Dividend is the number that is being divided by the {@see Divisor}.
     */
    public function getDividend(): ℚ
    {
        return $this->getNumerator();
    }

    /**
     * Returns the {@see Divisor} of this Rational Number when interpreted as a
     * quotient.
     *
     * The Divisor is the number that divides the {@see Dividend}.
     */
    public function getDivisor(): ℚ
    {
        return $this->getDenominator();
    }
}
