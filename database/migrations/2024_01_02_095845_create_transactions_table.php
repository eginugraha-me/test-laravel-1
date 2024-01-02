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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('no')->default(1);
            $table->text('description')->nullable(true);
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid');
            $table->integer('price')->nullable(false);
            $table->string('buyer_name');
            $table->string('buyer_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
