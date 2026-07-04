<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                "name" => "Amir",
                "email" => "amir@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Ahmed",
                "email" => "ahmed@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Mohamed",
                "email" => "mohamed@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Ali",
                "email" => "ali@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Omar",
                "email" => "omar@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Youssef",
                "email" => "youssef@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Mahmoud",
                "email" => "mahmoud@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Khaled",
                "email" => "khaled@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Mostafa",
                "email" => "mostafa@gmail.com",
                "password" => "123456"
            ],

            [
                "name" => "Hassan",
                "email" => "hassan@gmail.com",
                "password" => "123456"
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
