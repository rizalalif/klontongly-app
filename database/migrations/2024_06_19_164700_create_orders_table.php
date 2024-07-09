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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('trans_code')->unique();
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'orders_users_id')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('total_amount');
            $table->enum('status', ['complete','pending','cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
