<?php

declare(strict_types=1);

namespace Empaphy\Maphematics\Number\Arithmetic;

use Empaphy\Maphematics\Number\ℂ;

abstract class Adapter
{
    abstract public function add(ℂ $augend, ℂ ...$addends): ℂ;

    abstract public function subtract(ℂ $minuend, ℂ $subtrahend): ℂ;
}
