<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

class ComplexFraction implements ℝ
{
    use Arithmetic, Signed;

    /**
     * Magic method that allows a class to decide how it will react when it is
     * treated like a string.
     *
     * @see https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
     *
     * @return string Returns a string representation of this ComplexFraction.
     */
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }
}
