<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics;

use Empaphy\Maphematics\Set\Subset;
use Iterator;

/**
 * A Set is the mathematical model for a collection of different things.
 *
 * A Set contains elements or members, which can be mathematical objects of any
 * kind: numbers, symbols, points in space, lines, other geometrical shapes,
 * variables, or even other sets.
 *
 * The set with no element is the empty set; a set with a single element is a
 * Singleton. A Set may have a finite number of elements or be an infinite set.
 * Two sets are equal if they have precisely the same elements.
 *
 * @template   Element
 * @implements Subset<Element>
 */
class Set implements MathematicalObject, Subset, Iterator
{
    /**
     * @var Element[] $elements
     */
    protected array $elements;

    private int $position = 0;

    /**
     * @param  Element  $element
     * @param  Element  ...$elements
     */
    public function __construct($element, ...$elements)
    {
        $this->elements = [$element, ...$elements];
    }

    /**
     * @return Element
     */
    public function current()
    {
        return $this->elements[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->elements[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
