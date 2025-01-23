<?php

/**
 * @author    Alwin Garside <alwin@garsi.de>
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set;

/**
 * A Property is any characteristic that applies to a given {@see Set}.
 *
 * Rigorously, a property `p` defined for all elements of a set `X` is usually
 * defined as a function `p: X → {true, false}`, that is true whenever the
 * property holds; or equivalently, as the subset of `X` for which `p` holds;
 * i.e. the set `{x | p(x) = true}`; `p` is its indicator function. However, it
 * may be objected that the rigorous definition defines merely the extension of
 * a property, and says nothing about what causes the property to hold for
 * exactly those values.
 */
interface Property
{
    
}
