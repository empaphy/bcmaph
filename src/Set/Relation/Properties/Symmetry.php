<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation\Properties;

use Empaphy\Maphematics\Set\Relation\Binary;

class Symmetry
{
    public function indicate(Binary $relation): bool
    {
        $a = $relation->getLeft();
        $b = $relation->getRight();
    }
}
