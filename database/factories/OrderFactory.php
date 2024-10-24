<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\Pharmacy;
use App\Models\PharmacySalesman;
use App\Models\Salesman;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'pharmacy_id' => Pharmacy::factory(),
            'salesman_id' => Salesman::factory(),
            'delivery_date' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 0, 9999999999.99),
            'subtotal' => $this->faker->randomFloat(2, 0, 9999999999.99),
            'discount' => $this->faker->randomFloat(2, 0, 9999999999.99),
            'order_status' => $this->faker->randomElement(["pending","ordered","process","dispatch","completed","cancelled"]),
            'cancel_date' => $this->faker->date(),
            'canceling_reason' => $this->faker->text(),
            'pharmacy_salesman_id' => PharmacySalesman::factory(),
        ];
    }
}
