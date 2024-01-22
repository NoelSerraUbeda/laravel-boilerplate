<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Noel",
                "emai" => "noelserra@gmail.com",
                "password" =>"$2y$12$7UdOouuoovBQEqEZDfFziOSxKSQZxI7lUyAobGLXelfZoYtAVwbCi",
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}


