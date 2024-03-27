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
        Schema::create('lnd_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->varchar('product_name');
            $table->double('product_price');
            $table->text('product_description');
            $table->dateTime('updated_at');
            $table->dateTime('create_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lnd_products');
    }
};
