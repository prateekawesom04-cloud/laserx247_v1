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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_uid')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('admin_uid')->nullable();
            $table->tinyInteger('status')->default(2);
            $table->string('wallet_amount')->nullable('0.00');
            $table->string('unsattled_amount')->nullable('0.00');
            $table->string('commission_amount')->nullable('0.00');
            $table->string('referral')->nullable();
            $table->string('referral_code')->unique();
            $table->integer('referral_nos')->nullable();
            $table->json('user_setting')->nullable();
            $table->json('additional_data')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
