<?php

/**
 * @author       Alwin Garside <alwin@garsi.de>
 * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
 * @copyright    2023 Alwin Garside
 * @license      BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

/**
 * A common Fraction is an expression that represents a {@see RationalNumber}.
 *
 * If you need a Complex Fraction (e.g. one that contains a Fraction itself),
 * then use {@see ComplexFraction}.
 */
class Decimal extends RationalNumber
{
    use Arithmetic, Signed;

    /**
     * The string representation of the decimal value.
     *
     * @var string
     */
    private string $stringValue;

    /**
     * The string representation of the numerator.
     *
     * @var string
     */
    private string $stringNumerator;

    /**
     * The string representation of the denominator.
     *
     * @var string
     */
    private string $stringDenominator;

    /**
     * If just the numerator is provided, it's interpreted as the decimal value
     * itself.
     *
     * @param  ℚ|int|float|string  $numerator
     * @param  ℚ|int|string|null   $denominator
     */
    public function __construct($numerator, $denominator = null)
    {
        if (null === $denominator) {
            $this->stringValue = (string) $numerator;
        } else {
            $this->stringNumerator   = $numerator;
            $this->stringDenominator = $denominator;
        }
    }

    /**
     * @param  \Empaphy\Maphematics\Number\Integer|int|string  $dividend
     * @param  \Empaphy\Maphematics\Number\Integer|int|string  $divisor
     */
    public static function divide($dividend, $divisor): Decimal
    {
        return new self($dividend, $divisor);
    }

    /**
     * @return \Empaphy\Maphematics\Number\Integer
     */
    public function getNumerator(): \Empaphy\Maphematics\Number\Integer
    {
        if (null === $this->stringNumerator) {
            // TODO try and deduce the numerator and denominator from the stringValue.
        }

        return new Integer($this->stringNumerator);
    }

    public function getDenominator(): \Empaphy\Maphematics\Number\Integer
    {
        return new Integer($this->stringDenominator);
    }

    public function getRemainder(): ℂ
    {
        // TODO: Implement getRemainder() method.
    }

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
        if (null === $this->stringValue) {
            $this->stringValue = sprintf('%s/%s', $this->stringNumerator, $this->stringDenominator);
        }

        return $this->stringValue;
    }
}
