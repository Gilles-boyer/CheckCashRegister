<?php

namespace Database\Factories;

use App\Models\CashRegister;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id' => Type::inRandomOrder()->first()->id,
            'invoice' => fake()->boolean,
            'invoice_number' => fake()->optional()->numerify('INV-#####'),
            'amount' => fake()->randomFloat(2, 0, 10000),
            'quantity' => fake()->numberBetween(1, 10),
            'payment_terminal' => fake()->optional()->word(),
            'cash_register_id' => CashRegister::inRandomOrder()->first()->id,
        ];
    }
}
