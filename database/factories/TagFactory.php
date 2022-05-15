<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'color'=>$this->faker->randomElement(['red','blue','green','yellow','black','white','indigo','orange','pink','purple','teal','lime','brown','gray','maroon','navy','olive','silver','teal','violet','aqua']),
        ];
    }
}
