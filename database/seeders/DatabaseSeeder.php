<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //seed the users table with default parameters and role 'admin'
        \App\Models\User::factory()->create([
            'name' => 'admin1',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('qweqweqwe'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'qwetut mahendra',
            'email' => 'qwe@gmail.com',
            'password' => bcrypt('qweqweqwe'),
        ]);

    }
}
