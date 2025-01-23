<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation\Inequality;

use Empaphy\Maphematics\Set\Relation\Inequality;
use Empaphy\Maphematics\Set\Relation\StrictPartialOrder;

/**
 * Greater than (and not equal to).
 */
interface ≩ extends Inequality, StrictPartialOrder
{
}
