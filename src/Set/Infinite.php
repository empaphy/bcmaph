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
 * An Infinite Set is a {@see Set} that is not a {@see Finite} Set.
 *
 * Infinite Sets may be {@see Countable} or {@see Uncountable}.
 */
interface Infinite extends Subset
{
}
