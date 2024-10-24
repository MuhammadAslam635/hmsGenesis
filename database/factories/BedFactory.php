<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bed;
use App\Models\Patient;
use App\Models\Room;
use App\Models\RoomPatient;

class BedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bed::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'room_id' => Room::factory(),
            'patient_id' => Patient::factory(),
            'bed_number' => $this->faker->word(),
            'status' => $this->faker->randomElement(["available","occupied"]),
            'room_patient_id' => RoomPatient::factory(),
        ];
    }
}
