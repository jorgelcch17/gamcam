<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Database\Seeder;

class PublicServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = Service::factory(30)->create();

        foreach($service as $service) {
            Image::factory(1)->create([
                'imageable_id'=>$service->id,
                'imageable_type'=>Service::class,
            ]);
        }
    }
}
