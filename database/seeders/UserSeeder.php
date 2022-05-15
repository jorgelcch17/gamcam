<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Jorge Luis Condori Chavez',
            'email'=>'jorge@gmail.com',
            'password'=>bcrypt('1234Hola'),
        ]);
        User::factory(9)->create();
    }
}
