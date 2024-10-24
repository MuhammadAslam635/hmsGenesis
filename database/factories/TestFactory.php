<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Laboratory;
use App\Models\LaboratoryEmployee;
use App\Models\Patient;
use App\Models\Test;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'laboratory_id' => Laboratory::factory(),
            'patient_id' => Patient::factory(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'tested_by' => Employee::factory()->create()->tested_by,
            'laboratory_employee_id' => LaboratoryEmployee::factory(),
        ];
    }
}
