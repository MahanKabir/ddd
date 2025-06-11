<?php

namespace App\Domains\Product\Application\Commands;

class CreateProductCommand
{
    public function __construct(
        public string $name,
        public string $serial,
        public int $amount
    ) {}
}
