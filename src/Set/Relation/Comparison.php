<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

use Empaphy\Maphematics\Number\ℂ;

/**
 * @extends Binary<ℂ>
 */
abstract class Comparison implements Binary
{
    /**
     * Returns the left operand of the equivalence relation as a {@see ℂ number}.
     *
     * @return ℂ
     */
    abstract public function getLeft(): ℂ;

    /**
     * Returns the right operand of the equivalence relation as a {@see ℂ number}.
     *
     * @return ℂ
     */
    abstract public function getRight(): ℂ;
}
