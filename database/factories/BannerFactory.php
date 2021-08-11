<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

      return([
            'title' => $faker->word,
            'description' => $faker->sentence,
            'image' => $faker->image('storage/app/public/banner',400,300, null, false),
            'user_id'=>1,
        ]);
    }
}
