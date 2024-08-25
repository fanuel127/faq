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
            ['value' => 0 , 'name' => 'Probleme Serveur'],
            [ 'value' => 1 , 'name' => 'Difficulte de lecture'],
        ]);

    }

}
