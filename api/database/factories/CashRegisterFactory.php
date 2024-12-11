<?php

namespace Database\Factories;


use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CashRegister>
 */
class CashRegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location_id' => Location::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'date' => fake()->date(),
            'comment' => fake()->optional()->text(),
        ];
    }
}
