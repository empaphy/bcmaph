<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 *
 *    ∀a,b,c : aRb ∧ bRc ==> ¬(aRc).
 *
 * An example of an antitransitive relation: the defeated relation in knockout
 * tournaments. If player A defeated player B and player B defeated player C, A
 * can have never played C, and therefore, A has not defeated C.
 */
interface Antitransitive extends Irreflexive
{
}
