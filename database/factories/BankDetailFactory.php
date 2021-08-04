<?php

namespace Database\Factories;

use App\Models\BankDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BankDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account_holder_name'=>$this->faker->name(),
            'bank_name'=>'SBI',
            'account_number'=>$this->faker->creditCardNumber(),
            'ifsc_code'=>$this->faker->swiftBicNumber()
        ];
    }
}