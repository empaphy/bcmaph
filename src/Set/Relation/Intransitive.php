<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * A relation is Intransitive if it is not {@see Transitive}.
 *
 * That is, (if the relation in question is named `R`):
 *
 *    ¬(∀a,b,c : aRb ∧ bRc ==> aRc)
 *
 * This statement is equivalent to
 *
 *     ∃a,b,c : aRb ∧ bRc ∧ ¬(aRc)
 *
 * For instance, in the food chain, wolves feed on deer, and deer feed on grass,
 * but wolves do not feed on grass. Thus, the feed on relation among life forms
 * is intransitive, in this sense.
 */
interface Intransitive extends Binary
{
    public const TRANSITIVITY = self::class;
}
