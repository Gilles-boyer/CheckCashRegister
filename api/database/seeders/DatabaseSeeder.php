<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CashRegister;
use App\Models\Location;
use App\Models\Type;
use App\Models\Transaction;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Location::factory(5)->create();
        Type::factory(5)->create();

        CashRegister::factory(10)->create()->each(function ($cashRegister) {
            Transaction::factory(5)->create(['cash_register_id' => $cashRegister->id]);
        });
    }
}

