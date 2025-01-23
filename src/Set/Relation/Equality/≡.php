<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation\Equality;

use Empaphy\Maphematics\Set\Relation\Equality;

/**
 * The ≡ interface represents the "equal to" (≡) equality relation between two
 * (complex) numbers or other mathematical expressions.
 *
 * It extends the {@see Equality} interface, providing a concrete implementation
 * of the equal comparison. This interface can be used to represent and work
 * with the "equal to" relation in various mathematical contexts and operations.
 */
interface ≡ extends Equality
{
}
