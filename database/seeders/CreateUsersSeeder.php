<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

            [
               'name'=>'Yamin',

               'email'=>'paris@gmail.com',

               'type'=>'customer',

               'password'=> bcrypt('12345678'),

            ],

            [

               'name'=>'Ochid',

               'email'=>'ochid@gmail.com',

               'type'=> 'admin',

               'password'=> bcrypt('12345678'),

            ],

            [

               'name'=>'Riyan',

               'email'=>'rasyidin@gmail.com',

               'type'=>'admin',

               'password'=> bcrypt('12345678'),

            ],

        ];

    

        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

    }

