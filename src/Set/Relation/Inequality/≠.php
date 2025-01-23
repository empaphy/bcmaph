<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation\Inequality;

use Empaphy\Maphematics\Set\Relation\Inequation;

/**
 * The ≠ interface represents the specific "not equal to" (≠) inequality
 * relation between two (complex) numbers or other mathematical expressions.
 *
 * It extends the {@see Inequation} interface, providing a concrete
 * implementation of the non-equal comparison. This interface can be used to
 * represent and work with the "not equal to" relation in various mathematical
 * contexts and operations.
 */
interface ≠ extends Inequation
{
}
