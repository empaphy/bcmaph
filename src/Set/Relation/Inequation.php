<?php

/**
 * @copyright 2023 Alwin Garside
 * @license   BSD-3-Clause
 * @author    Alwin Garside <alwin@garsi.de>
 */

declare(strict_types=1);

namespace Empaphy\Maphematics\Set\Relation;

/**
 * The Inequation interface represents a specific type of {@see Inequality}
 * relation that asserts the non-equality between two (complex) numbers or other
 * mathematical expressions, denoted as {@see ≠}.
 *
 * It extends the {@see Inequality} interface, narrowing its focus specifically
 * to non-equal comparisons. Implementations of this interface can be used to
 * represent the inequation relation in various mathematical contexts.
 */
interface Inequation extends Inequality
{
}
