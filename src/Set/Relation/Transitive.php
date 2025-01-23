<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * A {@see Binary} Relation `R` on a set `X` is transitive if, for all elements
 * `a`, `b`, `c` in `X`, whenever R relates `a` to `b` and `b` to `c`, then `R`
 * also relates `a` to `c`.
 *
 * For example:
 *
 *     whenever `x > y` and `y > z`, then also `x > z`
 *
 */
interface Transitive extends Binary
{
    public const TRANSITIVITY = self::class;
}
