<?php
// database/factories/AccountFactory.php

namespace Database\Factories;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'balance' => $this->faker->randomFloat(2, 0, 10000),
            'type' => 'basic',
            'status' => 'active',
        ];
    }

    public function bank()
    {
        return $this->state([
            'type' => 'bank',
        ]);
    }

    public function credit()
    {
        return $this->state([
            'type' => 'credit',
        ]);
    }

    public function cash()
    {
        return $this->state([
            'type' => 'cash',
        ]);
    }

    public function inactive()
    {
        return $this->state([
            'status' => 'inactive',
        ]);
    }

    public function withNegativeBalance()
    {
        return $this->state([
            'balance' => $this->faker->randomFloat(2, -1000, -1),
        ]);
    }
}