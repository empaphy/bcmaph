# bcabs

bcabs — Returns the absolute value of an arbitrary precision number.

```php
bcabs(string $num, ?int $scale = null): string
```

The absolute value of a number __num__ is the non-negative value of __num__
without regard to its sign. Namely, __num__ if __num__ is a positive number,
and -__num__ if __num__ is negative (in which case negating __num__ makes
-__num__ positive).

For example, the absolute value of `3` is `3`, and the absolute value of
`−3` is also `3`. The absolute value of a number may be thought of as its
distance from zero.

## Parameters

__num__
: The number to get the absolute value of.

__scale__
: The number of digits after the decimal place in the result. If
  [null](https://www.php.net/reserved.constants#constant.null), it will default
  to the default scale set with [bcscale()](https://www.php.net/bcscale), or
  fallback to the value of the
  [bcmath.scale](https://www.php.net/bc.configuration#ini.bcmath.scale) INI
  directive.


## Return Values

The absolute value of __num__, as a string.


## Errors/Exceptions

This function throws a [ValueError](https://www.php.net/ValueError) in the
following cases:
  - __num__ is not a well-formed BCMath numeric string.
  - __scale__ is outside the valid range.
