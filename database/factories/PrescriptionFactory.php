<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Doctor;
use App\Models\DoctorPatient;
use App\Models\Patient;
use App\Models\Prescription;

class PrescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prescription::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'doctor_id' => Doctor::factory(),
            'patient_id' => Patient::factory(),
            'medication' => $this->faker->word(),
            'dosage' => $this->faker->word(),
            'instructions' => $this->faker->text(),
            'date_issued' => $this->faker->date(),
            'doctor_patient_id' => DoctorPatient::factory(),
        ];
    }
}
