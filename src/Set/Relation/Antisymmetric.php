<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * A {@see Binary} Relation `R` on a {@see Set} `X` is Antisymmetric if there is
 * no pair of distinct elements of `X` each of which is related by `R` to the
 * other. More formally, `R` is antisymmetric precisely if for all `a`, `b ∈ X`,
 *
 *     if `aRb` with `a ≠ b` then `bRa` must not hold,
 *
 * or equivalently,
 *
 *     if `aRb` and `bRa` then `a = b`
 *
 * So for example, `≤` (less than or equal to) is antisymmetric, because:
 *
 *     if `a ≤ b` and `b ≤ a` then `a = b`
 *
 * The definition of antisymmetry says nothing about whether `aRa` actually
 * holds or not for any`a`. An antisymmetric relation `R` on a set `X` may be
 * {@see Reflexive} (that is, `aRa` for no `a ∈ X`), or neither Reflexive nor
 * irreflexive. A Relation is asymmetric if and only if it is both
 * Antisymmetric and Irreflexive.
 */
interface Antisymmetric extends Binary
{
    public const SYMMETRY = self::class;
}
