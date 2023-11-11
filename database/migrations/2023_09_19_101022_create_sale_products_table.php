<?php

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
        Schema::create('sale_products', function (Blueprint $table) {
            $table->uuid("id")->primary();;
            $table->integer("price")->default(0);
            $table->float("quantity")->default(0);
            $table->foreignUuid("sale_id")->constrained("sales");
            $table->foreignUuid("product_id")->constrained("products");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_products');
    }
};
