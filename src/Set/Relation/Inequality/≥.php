<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation\Inequality;

use Empaphy\Maphematics\Set\Relation\Antisymmetric;
use Empaphy\Maphematics\Set\Relation\PartialOrder;
use Empaphy\Maphematics\Set\Relation\Reflexive;
use Empaphy\Maphematics\Set\Relation\Transitive;

/**
 * Greater than or equal to.
 *
 * It is:
 *
 *   - {@see Reflexive}:     `a ≥ a`
 *   - {@see Antisymmetric}: not `a ≥ b` if `b ≥ a`
 *   - {@see Transitive}:    if `a ≥ b` and `b ≥ c` then `a ≥ c`
 *
 */
interface ≥ extends PartialOrder
{
}
