<?php

namespace App\Domains\Product\ValueObjects;

use InvalidArgumentException;

class ProductSerial
{
    public function __construct(public string $value)
    {
        if (empty($value)) {
            throw new InvalidArgumentException('Serial cannot be empty');
        }
    }
}
