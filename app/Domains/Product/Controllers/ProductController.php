<?php

namespace App\Domains\Product\Controllers;

use App\Domains\Product\Application\Commands\CreateProductCommand;
use App\Domains\Product\Application\Services\ProductApplicationService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function __construct(public ProductApplicationService $service) {}

    public function store(Request $request)
    {
        $command = new CreateProductCommand(
            $request->get('name'),
            $request->get('serial'),
            $request->get('amount')
        );

        $this->service->createProduct($command);

        return response()->json(
            [
                'message' => 'Successfully created product!',
            ],
            201
        );
    }
}
