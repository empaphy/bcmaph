<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Number;

use Empaphy\Maphematics\Number\Decimal;
use Empaphy\Maphematics\Number\Integer;
use Empaphy\Maphematics\Number\ℚ;
use Empaphy\Maphematics\Number\ℤ;
use PHPUnit\Framework\TestCase;

class IntegerNumberTest extends TestCase
{
    public function testInteger(): void
    {
        $seven          = Integer::cast(7);
        $integer        = new Integer(1);
        $rationalNumber = new Decimal(1, 2);

        $this->acceptsInteger($integer);
        $this->acceptsInteger($rationalNumber);

        $this->acceptsRationalNumber($integer);
        $this->acceptsRationalNumber($rationalNumber);
    }

    public function acceptsInteger(ℤ $integer): void {}

    public function acceptsRationalNumber(ℚ $integer): void {}
}
