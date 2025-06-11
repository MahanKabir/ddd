<?php

namespace App\Domains\Product\Application\Services;

use App\Domains\Product\Application\Commands\CreateProductCommand;
use App\Domains\Product\Entities\ProductEntity;
use App\Domains\Product\Repositories\ProductRepositoryInterface;
use App\Domains\Product\ValueObjects\ProductAmount;
use App\Domains\Product\ValueObjects\ProductName;
use App\Domains\Product\ValueObjects\ProductSerial;

class ProductApplicationService
{
    public function __construct(public ProductRepositoryInterface $repository) {}

    public function createProduct(CreateProductCommand $command): void
    {
        $product = new ProductEntity(
            new ProductName($command->name),
            new ProductSerial($command->serial),
            new ProductAmount($command->amount)
        );

        $this->repository->save($product);
    }
}
