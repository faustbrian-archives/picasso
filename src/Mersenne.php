<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <legal@konceiver.dev>.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Konceiver\Picasso;

use mersenne_twister\twister;

final class Mersenne
{
    private twister $twister;

    public function __construct(int $seed)
    {
        ini_set('precision', '16');

        $this->twister = new twister($seed);
    }

    public function random(): float
    {
        return $this->twister->real_halfopen();
    }
}
