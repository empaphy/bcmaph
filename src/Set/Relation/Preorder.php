<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * A Preorder is a {@see Binary} that is {@see Reflexive} and
 * {@see Transitive}.
 *
 * Preorders are more general than {@see Equivalence} relations and (non-strict)
 * {@see PartialOrders}, both of which are special cases of a Preorder: an
 * {@see Antisymmetric} Preorder is a {@see PartialOrder}, and a
 * {@see Symmetric} Preorder is an {@see Equivalence} relation.
 */
interface Preorder extends Homogeneous, Reflexive, Transitive
{
}
