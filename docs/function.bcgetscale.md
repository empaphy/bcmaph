# bcgetscale

bcgetscale — Deduce the scale of arbitrary precision numbers.

## Description

```php
bcgetscale(string ...$nums): int
```

Returns the highest scale value for the provided __nums__ based on the number
of digits trailing the period (even zeroes), or the global scale value if no
number is provided.


## Parameters

__nums__
: The values from which to deduce the highest scale.


## Return Values

Returns the highest scale value encountered for the provided __nums__, or the
current global scale factor if no number is provided.


## Errors/Exceptions

This function throws a [ValueError](https://www.php.net/ValueError) if any
number in __nums__ is not a well-formed BCMath numeric string.
