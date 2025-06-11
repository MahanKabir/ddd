<?php

namespace App\Infrastructure\Product\Persistence\Eloquent\Repositories;

use App\Domains\Product\Entities\ProductEntity;
use App\Domains\Product\Repositories\ProductRepositoryInterface;
use App\Infrastructure\Product\Persistence\Eloquent\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function findById(int $id): ?ProductEntity {}

    public function findBySerial(string $string): ?ProductEntity {}

    public function save(ProductEntity $productEntity): void
    {
        $productModel = (new Product);
        $productModel
            ->setName($productEntity->name->value)
            ->setSerial($productEntity->serial->value)
            ->setAmount($productEntity->amount->value)
            ->save();
    }
}
