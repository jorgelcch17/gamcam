<?php

namespace Database\Seeders;

use App\Models\TourismCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourismCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        // insertando en la tabla tourism_categories usando DB
        DB::table('tourism_categories')->insert([
            'name' => 'Sitios naturales',
            'slug' => 'sitios-naturales',
        ]);
        DB::table('tourism_categories')->insert([
            'name' => 'Museos y manifestaciones culturales e historicas',
            'slug' => 'museos-y-manifestaciones-culturales-e-historicas',
        ]);
        DB::table('tourism_categories')->insert([
            'name' => 'Etnia y Folklore',
            'slug' => 'etnia-y-folklore',
        ]);
        DB::table('tourism_categories')->insert([
            'name' => 'Representaciones tecnicas, cientificas y artisticas',
            'slug' => 'representaciones-tecnicas-cientificas-y-artisticas',
        ]);
        DB::table('tourism_categories')->insert([
            'name' => 'Acontecimientos programados',
            'slug' => 'acontecimientos-programados',
        ]);

    }
}
