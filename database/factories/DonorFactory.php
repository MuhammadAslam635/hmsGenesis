<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Donor;
use App\Models\Employee;
use App\Models\User;

class DonorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donor::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(-10000, 10000),
            'gender' => $this->faker->randomElement(["male","female","other"]),
            'contact_number' => $this->faker->word(),
            'address' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'user_id' => User::factory(),
            'created_by' => Employee::factory()->create()->created_by,
        ];
    }
}
