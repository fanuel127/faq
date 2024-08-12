<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< Updated upstream
use Illuminate\Support\Facades\DB;
=======

>>>>>>> Stashed changes

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
<<<<<<< Updated upstream
        DB::table('role')->insert([
            ['value' => 0, 'role_name' => 'Admin'],
            ['value' => 1, 'role_name' => 'SimpleUser'],
        ]);

     }
=======

        $role = new Role(
            [
                'roleName' => 'User',
            ],
            [
                'roleName' => 'Admin',

            ]
        );

        $role->save();
    }
>>>>>>> Stashed changes
}
