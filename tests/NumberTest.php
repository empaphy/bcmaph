<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

use Empaphy\Maphematics\Number;
use Empaphy\Maphematics\Number\Decimal;
use Empaphy\Maphematics\Number\Integer;
use Empaphy\Maphematics\Number\ℤ;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    /**
     * @return array{
     *     0: mixed,
     *     1: string,
     *     2: boolean,
     *     3: boolean,
     *     4: boolean,
     *     5: boolean,
     *     6: boolean,
     * }[]
     */
    public function numberDataProvider(): array
    {
        // @formatter:off
        return [
            // #  type      ℂ?    ℝ?    ℚ?    ℤ?    ℕ?
            [  7, ℤ::class, true, true, true, true, true],
            ['7', ℤ::class, true, true, true, true, true],

        ];
        // @formatter:on
    }

    /**
     * @noinspection PhpParamsInspection
     */
    public function testIsNatural(): void
    {
        $this->assertTrue(Number::isNatural(7));
        $this->assertTrue(Number::isNatural('7'));
        $this->assertTrue(Number::isNatural(0));
        $this->assertTrue(Number::isNatural('0'));
        $this->assertFalse(Number::isNatural(-7));
        $this->assertFalse(Number::isNatural('-7'));
        $this->assertFalse(Number::isNatural('foo'));
        $this->assertFalse(Number::isNatural(M_PI));
        $this->assertFalse(Number::isNatural((string) M_PI));
        $this->assertFalse(Number::isNatural([]));
        $this->assertFalse(Number::isNatural(new stdClass()));
        $this->assertFalse(Number::isNatural(null));
    }

    public function testIsComplex(): void
    {
        $this->assertTrue(Number::isComplex(-7));
        $this->assertTrue(Number::isComplex(0));
        $this->assertTrue(Number::isComplex(7));
        $this->assertTrue(Number::isComplex(M_PI));
        $this->assertTrue(Number::isComplex(-M_PI));
        $this->assertTrue(Number::isComplex((string) M_PI));
    }

    public function testIsRational(): void
    {
        $this->assertTrue(Number::isRational(-7));
        $this->assertTrue(Number::isRational(0));
        $this->assertTrue(Number::isRational(7));
        $this->assertTrue(Number::isRational(0.25));
        $this->assertTrue(Number::isRational('0.25'));
        $this->assertTrue(Number::isRational(-0.25));
        $this->assertTrue(Number::isRational('-0.25'));
    }

    public function testIsReal(): void
    {
        $this->assertTrue(Number::isReal(-7));
        $this->assertTrue(Number::isReal(0));
        $this->assertTrue(Number::isReal(7));
        $this->assertTrue(Number::isReal(M_PI));
        $this->assertTrue(Number::isReal(-M_PI));
        $this->assertTrue(Number::isReal((string) M_PI));
    }

    public function testCast(): void
    {
        $this->assertInstanceOf(Integer::class, Number::cast(new Integer(7)));
        $this->assertInstanceOf(Integer::class, Number::cast(7));
        $this->assertInstanceOf(Decimal::class, Number::cast(1.75));
    }
}
