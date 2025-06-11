<?php

namespace Tests\Unit;

use App\Domains\Product\Application\Commands\CreateProductCommand;
use App\Domains\Product\Application\Services\ProductApplicationService;
use App\Domains\Product\Entities\ProductEntity;
use App\Domains\Product\Repositories\ProductRepositoryInterface;
use App\Infrastructure\Product\Persistence\Eloquent\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery;
use PHPUnit\Framework\TestCase;

class ProductApplicationServiceTest extends TestCase
{
    use WithFaker;
    /**
     * A basic unit test example.
     */
    public function test_create_product_calls_repository_save(): void
    {
        $mockRepository = Mockery::mock(ProductRepositoryInterface::class);
        $mockRepository->shouldReceive('save')
            ->once()
            ->with(Mockery::type(ProductEntity::class));

        $service = new ProductApplicationService($mockRepository);

        $command = new CreateProductCommand(
            'test',
            'xyz123',
            10
        );

        $service->createProduct($command);
        $this->assertTrue(true);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
