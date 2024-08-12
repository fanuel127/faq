<?php

namespace Database\Seeders;
<<<<<<< Updated upstream

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
=======
use  App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

>>>>>>> Stashed changes
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
<<<<<<< Updated upstream
    public function run(): void
    {
        DB::table('category')->insert([
            ['category' => 'Probleme Serveur'],
            [ 'category' => 'Difficulte de lecture'],
        ]);

    }
=======
    public function run()
    {
        Category::factory(10)->create();
        // create a specific category

        Category::factory()->create([
            'category' =>'Network',
        ]);
    }

>>>>>>> Stashed changes
}
