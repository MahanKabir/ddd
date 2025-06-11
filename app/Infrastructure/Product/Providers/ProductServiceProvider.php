<?php

namespace App\Infrastructure\Product\Providers;

use App\Domains\Product\Repositories\ProductRepositoryInterface;
use App\Infrastructure\Product\Persistence\Eloquent\Repositories\ProductRepository;
use Carbon\Laravel\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
}
