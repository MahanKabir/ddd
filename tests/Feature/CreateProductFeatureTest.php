<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateProductFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function is_creates_a_product_successfully(): void
    {
        $payload = [
            'name' => 'Test Product',
            'serial' => 'XYZ123456',
            'amount' => 10,
        ];

        $response = $this->postJson('/api/products', $payload);
        $response->assertStatus(201);
        $this->assertDatabaseHas('products', $payload);
    }
}
