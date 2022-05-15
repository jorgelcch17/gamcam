<?php

namespace Database\Factories;

use App\Models\TourismCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class TourismPlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'extract'=>$this->faker->text(200),
            'body'=>$this->faker->text(2000),
            'is_active'=>$this->faker->boolean(true),
            'tourism_category_id'=> TourismCategory::all()->random()->id,
            'user_id'=> User::all()->random()->id,
        ];
    }
}
