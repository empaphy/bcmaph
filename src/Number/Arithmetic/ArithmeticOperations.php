<?php

declare(strict_types=1);

namespace Empaphy\Maphematics\Number\Arithmetic;

use Empaphy\Maphematics\Number;

interface ArithmeticOperations
{
    /**
     * @param  \Empaphy\Maphematics\Number|int|string  ...$addends
     * @return \Empaphy\Maphematics\Number
     */
    public function ✚(...$addends): Number;

    /**
     * @param  Number|int|string  $subtrahend
     * @return \Empaphy\Maphematics\Number
     */
    public function −($subtrahend): Number;

    /**
     * @param  \Empaphy\Maphematics\Number|int|string  $multiplicand
     * @return \Empaphy\Maphematics\Number
     */
    public function ×($multiplicand): Number;

    /**
     * @param  \Empaphy\Maphematics\Number|int|string  $divisor
     * @return \Empaphy\Maphematics\Number
     */
    public function ÷($divisor): Number;
}
