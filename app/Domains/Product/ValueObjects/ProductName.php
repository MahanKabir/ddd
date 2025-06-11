<?php

namespace App\Domains\Product\ValueObjects;

use InvalidArgumentException;

class ProductName
{
    public function __construct(public string $value)
    {
        if (empty($value)) {
            throw new InvalidArgumentException('Name cannot be empty.');
        }
    }
}
