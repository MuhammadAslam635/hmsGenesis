<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Material;
use App\Models\Product;
use App\Models\User;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'material_id' => Material::factory(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'manufacture_date' => $this->faker->date(),
            'expiry_date' => $this->faker->date(),
            'qty' => $this->faker->numberBetween(-10000, 10000),
            'sale_qty' => $this->faker->numberBetween(-10000, 10000),
            'created_by' => User::factory()->create()->created_by,
        ];
    }
}
