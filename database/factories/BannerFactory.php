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
            'title' => $this->faker->name(),
            'slug' => $this->faker->unique()->name(),
            'description'=>$this->faker->sentences(50),
            'image'=>'https://source.unsplash.com/random',
            'condition'=>$this->faker->randomElement(['banner','promo']),
            'status'=>$this->faker->randomElement(['active','inactive'])
        ];
    }
}
