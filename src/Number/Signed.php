<?php

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

/**
 * A Signed Number is a Number that has a Sign.
 */
trait Signed
{
    /**
     * @var \Empaphy\Maphematics\Number\Sign|null
     */
    private $sign = null;

    /**
     * Lazy-gets the sign of this Integer.
     *
     * @return \Empaphy\Maphematics\Number\Sign
     */
    public function getSign(): Sign
    {
        if (null === $this->sign) {
            $this->sign = Sign::of($this);
        }

        return $this->sign;
    }

    /**
     * Returns true if the {@see Sign} is positive.
     *
     * @param  bool  $considerZeroPositive  If true, zero is considered positive.
     * @return bool True if the {@see Sign} is positive.
     */
    public function isPositive(bool $considerZeroPositive = false): bool
    {
        return $this->sign->isPositive($considerZeroPositive);
    }

    /**
     * Returns true if the {@see Sign} is negative.
     *
     * @return bool
     */
    public function isNegative(): bool
    {
        return $this->sign->isNegative();
    }

    /**
     * Returns true if the {@see Sign} is zero.
     *
     * @return bool
     */
    public function isSignZero(): bool
    {
        return $this->sign->isZero();
    }
}
