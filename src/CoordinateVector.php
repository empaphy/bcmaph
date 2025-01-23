<?php

declare(strict_types=1);

namespace empaphy\maphematics;

/**
 * @extends \Traversable<array-key, float>
 * @extends \ArrayAccess<array-key, float>
 */
interface CoordinateVector extends \Traversable, \ArrayAccess, \Countable
{
    /**
     * @var non-empty-array<float>
     */
    public array $coordinates { get; }

    /**
     * @var int<1, max>
     */
    public int $dimensions { get; }

    /**
     * Returns a CoordinateVector from a set of coordinates.
     */
    public static function fromCoordinates(float ...$coordinates): CoordinateVector;

    /**
     * Scales this Vector and returns the result as a new {@see Vector}.
     */
    public function scale(float $scalar): CoordinateVector;
}
