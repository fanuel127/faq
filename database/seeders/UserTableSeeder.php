<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use App\Models\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();
        // $roleId = $Role->id;
        $user = new User;
        //     'firstName'=>'doe',
        //     'lastName'=>'john',
        //     'phoneNumber'=>'679822990',
        //     'email'=>'john.doe@gmail.com',
        //     'pasword'=>'555555555',
        //     'role_id'=>$roleId

        // ]);
        $user->firstName = $faker->firstname;
        $user->lastName = $faker()->lastname();
        $user->phoneNumber = $faker()->unique()->phoneNumber();
        $user->email = $faker()->unique()->email();
        $user->password = $faker->password;
        $user->remember_token = 'ADKD9FKKDFA';
       // $user->role_id = $roleId;
         $user->role_id =Role::all()->random()->id;
        $user->save();
    }
}
