<?php

namespace Database\Seeders;
<<<<<<< Updated upstream

use App\Models\Role;
use App\Models\Category;

=======
use App\Models\Category;
use App\Models\Question;
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
            RoleTableSeeder::class,

        ]);
=======
         \App\Models\User::factory()->create([
        //     'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        // seed category table if empty
      if(category::count() == 0){
        $this->call(CategoryTableSeeder::class);
      }
      // seed question table if empty

      if(question::count() == 0){
        $this->call(QuestionTableSeeder::class);
      }
      $this->call([
        UserTableSeeder::class,
        RoleTableSeeder::class,

      ]);
>>>>>>> Stashed changes
    }
}

