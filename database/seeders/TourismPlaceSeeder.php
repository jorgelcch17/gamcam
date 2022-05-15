<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\TourismPlace;
use Illuminate\Database\Seeder;

class TourismPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places=TourismPlace::factory(100)->create();

        foreach ($places as $place) {
            Image::factory(1)->create([
                'imageable_id'=>$place->id,
                'imageable_type'=>TourismPlace::class,
            ]);
            $place->tags()->attach([
                rand(1,5),
                rand(6,10),
                rand(11,15),
            ]);
        }
    }
}
