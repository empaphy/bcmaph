<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set;

use Empaphy\Maphematics\Set\Relation\Comparison;
use Empaphy\Maphematics\Number\ℂ;

abstract class Adapter
{
    abstract public function compare(ℂ $left, ℂ $right): Comparison;
}
