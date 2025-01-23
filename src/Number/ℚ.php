<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

use Empaphy\Maphematics\Number\Arithmetic\Quotient;

/**
 * ℚ is the set of rational numbers.
 *
 * A rational number is a number that can be expressed as the {@see Quotient} or
 * {@see Fraction} of two {@see ℤ integer}s, a numerator and a non-zero denominator.
 */
interface ℚ extends ℝ
{
}
