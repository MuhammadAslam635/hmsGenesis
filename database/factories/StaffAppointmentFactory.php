<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Employee;
use App\Models\EmployeeAppointment;
use App\Models\StaffAppointment;

class StaffAppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StaffAppointment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'appointment_id' => Appointment::factory(),
            'role' => $this->faker->randomElement(["admin","nurse","pharmacist","technician"]),
            'employee_appointment_id' => EmployeeAppointment::factory(),
        ];
    }
}
