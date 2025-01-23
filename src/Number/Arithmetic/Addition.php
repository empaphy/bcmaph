<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number\Arithmetic;

use Empaphy\Maphematics\Number\ℂ;

/**
 * @example $sum = new Addition(1, 2.0, '3');
 */
class Addition
{
    /**
     * @var ℂ|int|string
     */
    protected $augend;

    /**
     * @var ℂ|int|string[]
     */
    protected $addends;

    /**
     * @param  ℂ|int|string  $augend
     * @param  ℂ|int|string  ...$addends
     */
    public function __construct($augend, ...$addends)
    {
        $this->augend  = $augend;
        $this->addends = $addends;
    }

    public static function sum($augend, ...$addends): self
    {
        return new self($augend, ...$addends);
    }
}
