<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Salesman;
use App\Models\User;

class SalesmanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Salesman::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name(),
            'contact_number' => $this->faker->word(),
            'address' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'created_by' => User::factory()->create()->created_by,
        ];
    }
}
