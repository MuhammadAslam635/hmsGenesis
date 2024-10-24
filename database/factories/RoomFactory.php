<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hospital;
use App\Models\Room;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hospital_id' => Hospital::factory(),
            'room_number' => $this->faker->word(),
            'type' => $this->faker->randomElement(["single","double","ward"]),
            'status' => $this->faker->randomElement(["available","occupied"]),
        ];
    }
}
