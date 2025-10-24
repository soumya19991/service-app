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
        //
        user::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456'),
            'role_id' => 1,
        ]);

        user::create([
            'name' => 'vender',
            'email' => 'vender@example.com',
            'password' => bcrypt('123456'),
            'role_id' => 2,
        ]);

        user::create([
            'name' => 'Customer',
            'email' => 'customer@example.com',
            'password' => bcrypt('123456'),
            'role_id' => 3,
        ]);

    }
}
