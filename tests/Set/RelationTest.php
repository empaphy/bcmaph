<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Set;

use Empaphy\Maphematics\Number;
use PHPUnit\Framework\TestCase;
use function Empaphy\Maphematics\helpers\𝕔;

class RelationTest extends TestCase
{
    public function testGreaterThen()
    {
        $seven = Number::cast(7);
        $five  = Number::cast(5);

        if (𝕔(7)->≩(5) === true) {

        }
    }
}
