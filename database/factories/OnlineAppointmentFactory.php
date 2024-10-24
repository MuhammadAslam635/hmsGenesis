<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Doctor;
use App\Models\DoctorPatient;
use App\Models\OnlineAppointment;
use App\Models\Patient;

class OnlineAppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OnlineAppointment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'doctor_id' => Doctor::factory(),
            'patient_id' => Patient::factory(),
            'appointment_date' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(["scheduled","completed","cancelled"]),
            'link' => $this->faker->word(),
            'duration' => $this->faker->numberBetween(-10000, 10000),
            'start_time' => $this->faker->dateTime(),
            'end_time' => $this->faker->dateTime(),
            'symptoms' => $this->faker->text(),
            'doctor_patient_id' => DoctorPatient::factory(),
        ];
    }
}
