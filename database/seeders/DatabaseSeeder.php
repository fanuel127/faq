<?php

namespace Database\Seeders;


use App\Models\Role;
use App\Models\Category;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {

        $this->call([
            CategoryTableSeeder::class,


            RoleTableSeeder::class,

        ]);


    }
}

