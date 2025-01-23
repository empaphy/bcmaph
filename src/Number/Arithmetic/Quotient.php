<?php

/**
 * @author       Alwin Garside <alwin@garsi.de>
 *
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @copyright    2023 Alwin Garside
 * @license      BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number\Arithmetic;

use Empaphy\Maphematics\Number\ℂ;

/**
 * A Quotient is a quantity produced by the {@see Division} of a {@see Dividend}
 * by a {@see Divisor}.
 */
interface Quotient
{
    /**
     * Returns the {@see Dividend} of this {@see Quotient}.
     *
     * The Dividend is the number that is being divided by the {@see Divisor}.
     */
    public function getDividend(): ℂ;

    /**
     * Returns the {@see Divisor} of this {@see Quotient}.
     *
     * The Divisor is the number that divides the {@see Dividend}.
     */
    public function getDivisor(): ℂ;

    /**
     * Returns the {@see Remainder} of this {@see Quotient}.
     *
     * The Remainder is the number that is "left over" after the {@see Division}
     * of the {@see Dividend} by the {@see Divisor}.
     */
    public function getRemainder(): ℂ;
}
