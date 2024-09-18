<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Metodo Insert
        DB::table('users')->insert([
            'name' => 'Fabiola Ochoa',
            'email' => 'fabiolaysam@gmail.com',
            'password' => bcrypt('admin1977'),
        ]);

        // Metodo Bulk Insert
        /*User::insert([
            ['name' => 'Usuario 1', 'email' => 'user1@example.com', 'password' => bcrypt('secret')],
            ['name' => 'Usuario 2', 'email' => 'user2@example.com', 'password' => bcrypt('secret')],
            ['name' => 'Usuario 3', 'email' => 'user3@example.com', 'password' => bcrypt('secret')],
        ]);

        // Metodo Eloquent
        User::create([
            'name' => 'Usuario 4',
            'email' => 'user4@example.com',
        ]);*/
    }
}
