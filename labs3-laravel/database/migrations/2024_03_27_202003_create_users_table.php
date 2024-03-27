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
        Schema::create('lnd_users', function (Blueprint $table) {
            $table->increments('user_id',);
            $table->varchar('user_name');
            $table->varchar('user_email');
            $table->varchar('user_pass');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lnd_users');
    }
};
