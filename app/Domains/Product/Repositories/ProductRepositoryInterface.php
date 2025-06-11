<?php

namespace App\Domains\Product\Repositories;

use App\Domains\Product\Entities\ProductEntity;

interface ProductRepositoryInterface
{
    public function findById(int $id): ?ProductEntity;

    public function findBySerial(string $string): ?ProductEntity;

    public function save(ProductEntity $productEntity): void;
}
