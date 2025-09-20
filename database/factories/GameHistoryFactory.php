<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GameHistory>
 */
class GameHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'game_uid'=> $this->faker->string(),
            'user_uid'=> $this->faker->string(),
            'user_ip'=> $this->faker->string(),
            'bet_amount'=> $this->faker->float(),
            'win_amount'=> $this->faker->float(),
            'game_round'=> $this->faker->string(),
            'token'=> $this->faker->string(),
            'wallet_before'=> $this->faker->float(),
            'wallet_after'=> $this->faker->float()
        ];
    }
}
