<?php

namespace Database\Seeders;

use App\Models\CamiriWiki;
use App\Models\CategoryService;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\TourismCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // verificar si existe la carpeta turism_places usando Storage
        if(Storage::exists('tourism_places')) {
            Storage::deleteDirectory('tourism_places');
        }
        Storage::makeDirectory('tourism_places');
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(TourismCategorySeeder::class);
        Tag::factory(15)->create();
        $this->call(TourismPlaceSeeder::class);
        CategoryService::factory(15)->create();
        CamiriWiki::factory(1)->create();
        $this->call(PublicServiceSeeder::class);
        Comment::factory(100)->create();
    }
}
