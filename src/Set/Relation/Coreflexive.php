<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * If whenever `x,y ∈ X` are such that `x R y`,then necessarily `x = y`.
 *
 * A Relation `R`is coreflexive if and only if its symmetric closure
 * {@see Antisymmetric}.
 *
 * For example, the Relation over the Integers in which each odd Number is
 * related to itself is a coreflexive relation. The equality relation is the
 * only example of a both reflexive and coreflexive relation, and any
 * Coreflexive Relation is a subset of the identity relation.
 */
interface Coreflexive extends Binary
{
    public const COREFLEXIVITY = self::class;
}
