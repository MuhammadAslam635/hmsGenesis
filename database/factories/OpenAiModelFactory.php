<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\OpenAiModel;
use App\Models\User;

class OpenAiModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OpenAiModel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'model_name' => $this->faker->word(),
            'model_key' => $this->faker->word(),
            'created_by' => User::factory()->create()->created_by,
            'user_id' => User::factory(),
        ];
    }
}
