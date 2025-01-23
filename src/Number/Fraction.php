<?php
/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

use Empaphy\Maphematics\Number;
use Empaphy\Maphematics\Number\Arithmetic\Quotient;

/**
 * A Fraction represents a part of a whole or, more generally, any number of
 * equal parts.
 *
 * A Fraction consists of a {@see Numerator}, a non-zero {@see Denominator}.
 *
 * Note: A fraction is not a {@see Number} itself, but rather a representation
 *       of a {@see Number}.
 */
interface Fraction extends ℚ, Quotient
{
    /**
     * Returns the {@see Numerator} of this {@see Fraction}.
     *
     * The Numerator is the number of equal parts of the whole.
     */
    public function getNumerator(): ℂ;

    /**
     * Returns the {@see Denominator} of this {@see Fraction}.
     *
     * The Denominator is the number of equal parts that make up the whole.
     */
    public function getDenominator(): ℂ;
}
