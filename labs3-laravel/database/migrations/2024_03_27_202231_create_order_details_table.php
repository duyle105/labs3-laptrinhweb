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
        Schema::create('lnd_order_details', function (Blueprint $table) {
            $table->increments('order_detail_id');
            $table->integer('oder_id');
            $table->integer('product_id');
            $table->dateTime('updated_at');
            $table->dateTime('create_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lnd_order_details');
    }
};
