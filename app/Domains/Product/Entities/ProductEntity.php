<?php

namespace App\Domains\Product\Entities;

use App\Domains\Product\ValueObjects\ProductAmount;
use App\Domains\Product\ValueObjects\ProductName;
use App\Domains\Product\ValueObjects\ProductSerial;

class ProductEntity
{
    public function __construct(
        public ProductName $name,
        public ProductSerial $serial,
        public ProductAmount $amount,
    ) {}

    public function increaseAmount(int $value): void
    {
        $this->amount = $this->amount->increase($value);
    }
}
