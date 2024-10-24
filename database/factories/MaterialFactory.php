<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Material;
use App\Models\User;

class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'qty' => $this->faker->randomFloat(2, 0, 999.99),
            'qty_type' => $this->faker->randomElement(["kg","ltr","inches"]),
            'created_by' => User::factory()->create()->created_by,
        ];
    }
}
