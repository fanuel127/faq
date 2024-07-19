<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         User::factory(2)->create();

    //         'role_id'=> role::where('role_name','SimpleUser')
    //      ]);
    //      User::factory()->create([
    //         'role_id'=> role::where('role_name','Admin')
    //      ]);


    }
}
