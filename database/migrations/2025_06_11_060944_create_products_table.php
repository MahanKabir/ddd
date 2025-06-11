<?php

use App\Infrastructure\Product\Persistence\Eloquent\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Product::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(Product::COLUMN_NAME, 64)
                ->nullable(false);
            $table->string(Product::COLUMN_SERIAL, 16)
                ->nullable(false);
            $table->integer(Product::COLUMN_AMOUNT, false, true)
                ->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Product::TABLE);
    }
};
