<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductBadge;
use App\Models\ProductUser;
use App\Models\User;

class ProductBadgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductBadge::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'badge' => $this->faker->word(),
            'qty' => $this->faker->numberBetween(-10000, 10000),
            'created_by' => User::factory()->create()->created_by,
            'product_user_id' => ProductUser::factory(),
        ];
    }
}
