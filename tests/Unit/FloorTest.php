<?php

declare(strict_types=1);

use function empaphy\bcmaph\bcfloor;

describe('bcfloor()', function () {
    test('rounds a fraction down', function (string $num, string $expected) {
        $floor = bcfloor($num);

        expect($floor)->toEqual($expected);
    })->with([
        [ '0',       '0',  ],
        ['-0',      '-0',  ],
        [ '1',       '1',  ],
        ['-1',      '-1',  ],
        [ '0.0007',  '0',  ],
        ['-0.0007', '-0',  ],
        [ '1.0007',  '1',  ],
        ['-1.0007', '-1',  ],
    ]);
});
