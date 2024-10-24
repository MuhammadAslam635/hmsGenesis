<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\DoctorPatient;
use App\Models\Patient;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

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
            'type' => $this->faker->randomElement(["online","physical"]),
            'symptoms' => $this->faker->text(),
        ];
    }
}
