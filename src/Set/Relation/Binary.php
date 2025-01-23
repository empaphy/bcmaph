<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

use Empaphy\Maphematics\Set\Relation;

/**
 * A Binary Relation represents a {@see Relation} that may, or may not, hold
 * between two given members of a {@see Set}.
 *
 * For example, "{@see ≨ is less than}" is a Relation on the set of
 * {@see ℕ natural numbers}; it holds e.g. between 1 and 3 (denoted as `1 < 3`),
 * and likewise between 3 and 4 (denoted as `3 < 4`), but neither between 3 and
 * 1 nor between 4 and 4.
 *
 * @template T
 */
interface Binary extends Relation
{
    /**
     * The left operand.
     *
     * @return T
     */
    public function getLeft();

    /**
     * The right operand.
     *
     * @return T
     */
    public function getRight();
}
