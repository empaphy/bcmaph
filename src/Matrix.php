<?php

declare(strict_types=1);

namespace empaphy\maphematics;

use empaphy\phatch\ReadonlyArrayObject;

/**
 * Represents an immutable matrix of elements.
 *
 * A **matrix** is a rectangular array of numbers, symbols, or expressions, with
 * elements arranged in rows and columns, which is used to represent a
 * mathematical object or property of such an object.
 *
 * @extends ReadonlyArrayObject<array-key, non-empty-list<float>, \ArrayIterator>
 */
readonly class Matrix extends ReadonlyArrayObject
{
    /**
     * Contains the elements of the matrix, divided by rows.
     *
     * @var  non-empty-list<non-empty-list<float>>
     */
    public array $rows;

    /**
     * Contains the elements of the matrix, divided by columns.
     *
     * @var  non-empty-list<non-empty-list<float>>
     */
    public array $columns;

    /**
     * Whether this Matrix is square.
     */
    public bool $square;

    /**
     * The number of rows in this Matrix.
     */
    public int $height;

    /**
     * The number of columns in this Matrix.
     */
    public int $width;

    /**
     * @param  non-empty-list<float>  ...$elements
     *
     * @throws \LengthException If the matrix is empty or rows length varies.
     */
    public function __construct(array ...$elements)
    {
        if (! $elements) {
            throw new \LengthException('Matrix can\'t be empty');
        }

        parent::__construct($elements);

        $rowLength = \count($elements[0]);
        $rows = [];
        $columns = [];

        // Validate that all rows are arrays, and are the same length.
        foreach ($elements as $row) {
            if (! $row) {
                throw new \LengthException('Matrix rows can\'t be empty');
            }

            if (\count($row) !== $rowLength) {
                throw new \LengthException('All rows must be the same length');
            }

            $rows[] = $row;
            foreach ($row as $columnKey => $element) {
                $columns[$columnKey][] = $element;
            }
        }

        $this->rows = $rows;
        $this->columns = \array_values($columns);

        $this->square = \count($this->rows) === \count($this->columns);
        $this->height = \count($this->rows);
        $this->width = \count($this->columns);
    }

    /**
     * Produces a new {@see Matrix} that is the product of `$this` and
     * `$matrix`.
     **
     * @param  Matrix  $matrix
     * @return Matrix The product as a new {@see Matrix}.
     */
    public function multiply(Matrix $matrix): Matrix
    {
        // For matrix multiplication, the number of columns in the first matrix
        // must be equal to the number of rows in the second matrix.
        if (count($this->columns) !== count($matrix->rows)) {
            throw new \LengthException(
                'Matrix dimensions are not compatible for multiplication',
            );
        }

        $product = [];
        foreach ($this->rows as $row) {
            $productRow = [];
            foreach ($matrix->columns as $column) {
                $sum = 0;
                foreach ($row as $key => $rowElement) {
                    $sum += $rowElement * $column[$key];
                }
                $productRow[] = $sum;
            }
            $product[] = $productRow;
        }

        return new Matrix(...$product);
    }

    public function determinant()
    {
        if (! $this->square) {
            throw new \LengthException(
                'Matrix must be square to have a determinant'
            );
        }


    }

    /**
     * Transpose the Matrix.
     */
    public function transpose(): Matrix
    {
        return new Matrix(...$this->columns);
    }
}
