<?php

namespace Database\Factories;

use App\Models\TourismPlace;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment'=>$this->faker->text(25),
            'user_id'=>User::all()->random()->id,
            'tourism_place_id'=>TourismPlace::all()->random()->id,
        ];
    }
}
