<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\HAsh;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
            'user_type' => 1
        ]);
    }
}
