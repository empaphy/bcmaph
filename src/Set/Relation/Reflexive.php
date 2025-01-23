<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * A {@see Binary binary relation} R on a set X is Reflexive if it
 * relates every element of X to itself.
 *
 * An example of a reflexive relation is the relation "is equal to" on the set
 * of real numbers, since every real number is equal to itself. Along with
 * {@see Symmetric symmetry} and {@see Transitive transitivity}, reflexivity is
 * one of three properties defining equivalence relations.
 */
interface Reflexive extends Binary
{
    public const REFLEXIVITY = self::class;
}
