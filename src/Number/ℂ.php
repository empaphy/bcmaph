<?php

/**
 * @author       Alwin Garside <alwin@garsi.de>
 *
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @copyright    2023 Alwin Garside
 * @license      BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

use Empaphy\Maphematics\Set\Infinite;
use Stringable;

/**
 * ℂ is the set of all complex numbers.
 *
 * A complex number is an element of a number system that extends the real
 * numbers with a specific element denoted i, called the imaginary unit and
 * satisfying the equation i² == -1; every complex number can be expressed in
 * the form `a + bi`, where `a` and `b` are real numbers.
 */
interface ℂ extends Infinite
{
}
