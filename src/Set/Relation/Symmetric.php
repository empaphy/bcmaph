<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * A Symmetric relation is a type of {@see Binary} Relation.
 *
 * An example is the relation "is equal to", because if `a = b` is true then
 * `b = a` is also true.
 *
 * Symmetry, along with {@see Reflexive reflexivity} and
 * {@see Transitive transitivity}, are the three defining properties of an
 * {@see Equivalence} relation.
 */
interface Symmetric extends Binary
{
    public const SYMMETRY = self::class;
}
