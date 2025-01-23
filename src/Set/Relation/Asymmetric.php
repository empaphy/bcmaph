<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * An Asymmetric Relation is a {@see Binary} relation `R` on a {@see Set} `X`
 * where for all `a,b ∈ X`, if `a` is related to `b`, then `b` is not related to
 * `a`.
 *
 * `<` and `>` are both asymmetric
 *
 *     if `a < b`, then not `b < a`
 */
interface Asymmetric extends Binary
{
    public const SYMMETRY = self::class;
}
