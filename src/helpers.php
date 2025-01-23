<?php

declare(strict_types=1);

namespace Empaphy\Maphematics\helpers;

use Empaphy\Maphematics\Number;
use Empaphy\Maphematics\Number\Integer;
use Empaphy\Maphematics\Number\ℂ;

/**
 * @param  ℂ|int|float|string  $number
 */
function 𝕔($number): ℂ
{
    return Number::cast($number);
}

function int($number): Number\Integer
{
    return new Integer($number);
}
