<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' =>  'Tanvirul Islam',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('z'),
            'user_role' => 'admin',
        ]);

        for($i =0; $i < 4; $i++) {
            User::create([
                'name' =>  'User ' . ($i+1),
                'email' => 'user' . ($i+1) .'@gmail.com',
                'password' => Hash::make('z'),
            ]);
        }
    }
}
