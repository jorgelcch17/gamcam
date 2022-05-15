<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url'=>'tourism_places/'.$this->faker->image('public/storage/tourism_places','640','480',null,false),
        ];
    }
}
