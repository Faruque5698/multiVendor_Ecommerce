<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model=Category::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word,
            'photo'=>$this->faker->imageUrl('100','100'),
            'summary'=>$this->faker->sentences('10','true'),
            'is_parent'=>$this->faker->randomElement([true,false]),
            'status'=>$this->faker->randomElement(['active','inactive']),
            'parent_id'=>$this->faker->randomElement(Category::pluck('id')->toArray()),
        ];
    }
}
