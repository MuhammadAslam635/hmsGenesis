<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\HospitalAdmin;
use App\Models\HospitalHospitalAdminUser;
use App\Models\User;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hospital_id' => Hospital::factory(),
            'user_id' => User::factory(),
            'created_by' => HospitalAdmin::factory()->create()->created_by,
            'specialization' => '{}',
            'hospital_hospital_admin_user_id' => HospitalHospitalAdminUser::factory(),
        ];
    }
}
