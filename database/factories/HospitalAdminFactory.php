<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hospital;
use App\Models\HospitalAdmin;
use App\Models\HospitalUser;
use App\Models\User;

class HospitalAdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HospitalAdmin::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hospital_id' => Hospital::factory(),
            'user_id' => User::factory(),
            'created_by' => User::factory()->create()->created_by,
            'hospital_user_id' => HospitalUser::factory(),
        ];
    }
}
