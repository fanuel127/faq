<?php

namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(): void
    {
        DB::table('category')->insert([
            ['category' => 'Probleme Serveur'],
            [ 'category' => 'Difficulte de lecture'],
        ]);

    }

}
