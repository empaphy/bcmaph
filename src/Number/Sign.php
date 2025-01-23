<?php

/**
 * @noinspection PhpMultipleClassDeclarationsInspection
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Number;

use InvalidArgumentException;
use RuntimeException;
use Stringable;

class Sign implements Stringable
{
    /**
     * A number is positive if it is greater than zero.
     */
    public const POSITIVE = 1;

    /**
     * A number is negative if it is less than zero.
     */
    public const NEGATIVE = -1;

    /**
     * A number is zero if it is neither positive nor negative.
     */
    public const ZERO = 0;

    /**
     * @var int Numeric representation of the sign.
     */
    private $sign;

    /**
     * @param  int  $sign Numeric representation of the sign.
     */
    public function __construct(int $sign)
    {
        switch ($sign) {
            case self::POSITIVE:
            case self::NEGATIVE:
            case self::ZERO:
                $this->sign = $sign;
                break;

            default:
                throw new InvalidArgumentException("Invalid sign: {$sign}");
        }
    }

    /**
     * @param  \Empaphy\Maphematics\Number|int|string  $number
     * @return self
     */
    public static function of($number): self
    {
        return new self(bccomp((string) $number, '0'));
    }

    /**
     * Returns whether this Sign is positive.
     *
     * @param  bool  $considerZeroPositive  If true, zero is considered positive.
     * @return bool True if this Sign is positive.
     */
    public function isPositive(bool $considerZeroPositive = false): bool
    {
        return ($considerZeroPositive && self::NEGATIVE !== $this->sign)
            || self::POSITIVE === $this->sign;
    }

    /**
     * Returns whether this Sign is negative.
     *
     * @return bool True if this Sign is negative.
     */
    public function isNegative(): bool
    {
        return self::NEGATIVE === $this->sign;
    }

    /**
     * Returns whether this Sign is zero.
     *
     * @return bool True if this Sign is zero.
     */
    public function isZero(): bool
    {
        return self::ZERO === $this->sign;
    }

    /**
     * Returns the numeric representation of this Sign.
     *
     * @return int
     */
    public function getSign(): int
    {
        return $this->sign;
    }

    /**
     * Returns the string representation of this Sign.
     *
     * @return string Either '+', '-', or '0'.
     */
    public function __toString(): string
    {
        switch ($this->sign) {
            case self::POSITIVE:
                return '+';
            case self::NEGATIVE:
                return '-';
            case self::ZERO:
                return '0';
        }

        throw new RuntimeException("Invalid sign: {$this->sign}");
    }
}
