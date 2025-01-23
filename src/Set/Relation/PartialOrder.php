<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

use Empaphy\Maphematics\Number\ℂ;

/**
 * A Partial Order is a {@see Homogeneous} relation ≤ on a set `P` that is
 * {@see Reflexive}, {@see Antisymmetric}, and {@see Transitive}.
 *
 * That is, for all `a,b,c ∈ P,` it must be:
 *
 *   - {@see Reflexive}:     `a ≤ a`
 *   - {@see Antisymmetric}: not `a ≤ b` if `b ≤ a`
 *   - {@see Transitive}:    if `a ≤ b` and `b ≤ c` then `a ≤ c`
 *
 * @see ≤, ≥
 */
interface PartialOrder extends Antisymmetric, Preorder
{
    /**
     * @todo Relation doesn't necessarily have to be against a number.
     */
    public function ≥(ℂ $right): bool;
}
