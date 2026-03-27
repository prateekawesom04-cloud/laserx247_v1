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
        Schema::create('game_histories', function (Blueprint $table) {
            $table->id();
            $table->string('game_uid');
            $table->string('user_uid');
            $table->string('user_ip');
            $table->float('bet_amount')->nullable();
            $table->float('win_amount')->nullable();
            $table->string('game_round')->nullable();
            $table->string('token');
            $table->float('wallet_before')->nullable();
            $table->float('wallet_after')->nullable();
            $table->string('play_time')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_histories');
    }
};
