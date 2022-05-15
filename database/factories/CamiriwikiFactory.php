<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class CamiriwikiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title= $this->faker->unique()->sentence();
        return [
            'title'=>$title,
            'slug'=>Str::slug($title),
            'body'=>$this->faker->text(2500),
        ];
    }
}
