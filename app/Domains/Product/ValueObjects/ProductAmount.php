<?php

namespace App\Domains\Product\ValueObjects;

use InvalidArgumentException;

class ProductAmount
{
    public function __construct(public string $value)
    {
        if (empty($value)) {
            throw new InvalidArgumentException('Amount cannot be empty');
        }
    }
}
