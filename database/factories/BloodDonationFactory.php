<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BloodBank;
use App\Models\BloodBankDonor;
use App\Models\BloodDonation;
use App\Models\Donor;

class BloodDonationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BloodDonation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'blood_bank_id' => BloodBank::factory(),
            'donor_id' => Donor::factory(),
            'blood_type' => $this->faker->randomElement(["A+",""]),
            'units' => $this->faker->numberBetween(-10000, 10000),
            'donation_date' => $this->faker->dateTime(),
            'blood_bank_donor_id' => BloodBankDonor::factory(),
        ];
    }
}
