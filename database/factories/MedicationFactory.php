<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Medication;
use App\Models\Pharmacy;

class MedicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medication::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'pharmacy_id' => Pharmacy::factory(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'discount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'company' => $this->faker->company(),
            'qty' => $this->faker->numberBetween(-10000, 10000),
            'sale_qty' => $this->faker->numberBetween(-10000, 10000),
            'return_qty' => $this->faker->numberBetween(-10000, 10000),
            'expiry_date' => $this->faker->date(),
        ];
    }
}
