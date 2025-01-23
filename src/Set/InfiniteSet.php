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
abstract class InfiniteSet extends Set implements Infinite
{
    /**
     * @noinspection MagicMethodsValidityInspection
     * @noinspection PhpMissingParentConstructorInspection
     */
    public function __construct() {}

    /**
     * @return Element
     */
    public function current()
    {
        // @todo implement
    }

    public function next(): void
    {
        // @todo implement
    }

    public function key(): int
    {
        // @todo implement
    }

    public function valid(): bool
    {
        // @todo implement
    }

    public function rewind(): void
    {
        // @todo implement
    }
}
