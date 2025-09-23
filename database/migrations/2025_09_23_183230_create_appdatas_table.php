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
        Schema::create('appdatas', function (Blueprint $table) {
            $table->id();
            $table->string('app_name')->nullable();
            $table->string('app_domain')->nullable();
            $table->json('app_settings')->nullable();
            $table->json('app_data')->nullable();
            $table->json('additional_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appdatas');
    }
};
