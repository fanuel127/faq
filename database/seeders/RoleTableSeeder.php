<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('role')->insert([
            ['value' => 0, 'role_name' => 'Admin'],
            ['value' => 1, 'role_name' => 'SimpleUser'],
        ]);

     }
}
