<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= [ 
            [
            'name'=>'User',
            'email'=>'User@gmail.com',
            'password'=>'bcrypt(12345678)',
            'role'=>2

            ],
            [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'bcrypt(66666666)',
            'role'=>1

            ],
      
            ];
            foreach($users as user){
                User::create($user);
            }
    }
}
