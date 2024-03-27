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
        Schema::create('lnd_oders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('user_id');
            $table->dateTime('updated_at');
            $table->dateTime('create_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lnd_oders');
    }
};
