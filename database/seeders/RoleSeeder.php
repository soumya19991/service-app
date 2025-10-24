<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Role::create([
            'name' => 'Admin',
            'description' => 'Admin Role',
        ]);

       Role::create([
            'name' => 'vender',
            'description' => 'vender Role',
        ]); 
        Role::create([
            'name' => 'Customer',
            'description' => 'Customer Role',
        ]);

    }
}
