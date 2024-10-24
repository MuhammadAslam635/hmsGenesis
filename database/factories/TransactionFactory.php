<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\Transaction;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'payment_mode' => $this->faker->randomElement(["cod","card","online"]),
            'payment_status' => $this->faker->randomElement(["paid","partial","pending"]),
            'amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'remaining_amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'order_total' => $this->faker->randomFloat(2, 0, 9999999999.99),
        ];
    }
}
