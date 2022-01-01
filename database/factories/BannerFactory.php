<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BannerFactory extends Factory
{
    protected $model=Banner::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description'=>$this->faker->sentences(5,true),
            'photo'=>$this->faker->imageUrl('100','100'),
            'condition'=>$this->faker->randomElement(['banner','promo']),
            'status'=>$this->faker->randomElement(['active','inactive'])
        ];
    }
}
