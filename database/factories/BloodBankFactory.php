<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BloodBank;
use App\Models\Hospital;

class BloodBankFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BloodBank::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hospital_id' => Hospital::factory(),
            'name' => $this->faker->name(),
            'address' => $this->faker->word(),
            'contact_number' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
        ];
    }
}
