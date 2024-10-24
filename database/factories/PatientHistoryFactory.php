<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\PatientDoctor;
use App\Models\PatientHistory;

class PatientHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientHistory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'history' => $this->faker->text(),
            'checked_by' => Doctor::factory()->create()->checked_by,
            'patient_doctor_id' => PatientDoctor::factory(),
        ];
    }
}
