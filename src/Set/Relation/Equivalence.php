<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * An Equivalence Relation has the following properties:
 *
 *   - {@see Reflexive}:  `a` equals `a`
 *   - {@see Symmetric}:  `a` equals `b` iff `b` equals `a`
 *   - {@see Transitive}: if `a` equals `b` and `b` equals `c`, then `a` equals `c`
 */
interface Equivalence extends PartialEquivalence, Reflexive
{
}
