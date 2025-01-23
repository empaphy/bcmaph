<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number\Arithmetic\Adapter;

use Empaphy\Maphematics\Number;
use Empaphy\Maphematics\Number\Arithmetic\Adapter;
use Empaphy\Maphematics\Number\ℂ;

class Bcmath extends Adapter
{
    public function add(ℂ $augend, ℂ ...$addends): ℂ
    {
        $sum = (string) $augend;
        foreach ($addends as $addend) {
            $sum = bcadd($sum, (string) $addend);
        }

        return Number::cast($sum);
    }

    public function subtract(ℂ $minuend, ℂ $subtrahend): ℂ
    {
        // TODO: Implement subtract() method.
    }
}
