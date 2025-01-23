<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * A Homogeneous {@see Relation} (also called endorelation) on a {@see Set} `X`
 * is a {@see Binary} Relation between `X` and itself, i.e. it is a subset of
 * the Cartesian product X × X.
 */
interface Homogeneous extends Binary
{
}
