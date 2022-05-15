<?php

namespace Database\Factories;

use App\Models\CategoryService;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name= $this->faker->unique()->sentence();
        return [
            'name'=>$name,
            'category_service_id'=>CategoryService::all()->random()->id,
            'slug'=>Str::slug($name),
            'body'=>$this->faker->text(900),
            'is_active'=>$this->faker->boolean(true),
            'user_id'=> User::all()->random()->id,
            'ubicacion'=>$this->faker->address,
            'facebook'=>$this->faker->url,
            'whatsapp'=>$this->faker->phoneNumber,
            'website'=>$this->faker->url,
        ];
    }
}
