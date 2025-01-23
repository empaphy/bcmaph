<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set;

use Empaphy\Maphematics\Set;

/**
 * @template   Element
 * @implements Set<Element>
 */
class Singleton extends Set
{
    /**
     * @param  Element  $element
     *
     * @noinspection MagicMethodsValidityInspection
     * @noinspection PhpMissingParentConstructorInspection
     */
    public function __construct($element)
    {
        $this->elements = [$element];
    }
}
