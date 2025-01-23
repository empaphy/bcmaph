<?php

declare(strict_types=1);

namespace empaphy\maphematics;

use empaphy\phatch\ReadonlyArrayObject;

/**
 * A **coordinate vector** is a representation of a vector as an ordered list of
 * numbers (a tuple) that describes the vector in terms of a particular ordered
 * basis.
 *
 * An easy example may be a position such as (5, 2, 1) in a 3-dimensional
 * Cartesian coordinate system with the basis as the axes of this system.
 *
 * Coordinates are always specified relative to an ordered basis. Bases and
 * their associated coordinate representations let one realize vector spaces and
 * linear transformations concretely as column vectors, row vectors, and
 * {@see Matrix matrices}; hence, they are useful in calculations.
 *
 * @extends ReadonlyArrayObject<array-key, float, \ArrayIterator>
 */
readonly class Vector extends ReadonlyArrayObject implements CoordinateVector
{
    /**
     * @var non-empty-array<float>
     */
    public array $coordinates;

    /**
     * @var int<1, max>
     */
    public int $dimensions;

    public function __construct(float ...$coordinates)
    {
        if (! $coordinates) {
            throw new \LengthException('Vectors have at least one coordinate');
        }

        parent::__construct($coordinates);

        $this->coordinates = $coordinates;
        $this->dimensions = count($coordinates);
    }

    public static function fromCoordinates(float ...$coordinates): CoordinateVector
    {
        return new Vector(...$coordinates);
    }

    /**
     * Produces the sum of this and a given {@see Vector}.
     *
     * @param  Vector  $vector
     * @return Vector The sum of the addition as a new {@see Vector}.
     */
    public function add(Vector $vector): Vector
    {
        if ($this->dimensions !== $vector->dimensions) {
            throw new \LengthException('Vectors must have the same dimensions');
        }

        return new Vector(...\array_map(
            static fn(float $a, float $b): float => $a + $b,
            $this->coordinates,
            $vector->coordinates,
        ));
    }

    /**
     * Scales this Vector and returns the result as a new {@see Vector}.
     *
     * @param  float  $scalar
     * @return Vector A new, scaled Vector.
     */
    public function scale(float $scalar): Vector
    {
        return new Vector(...\array_map(
            static fn(float $coordinate) => $scalar * $coordinate,
            $this->coordinates
        ));
    }
}
