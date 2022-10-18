<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'user',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'username' => 'admin',
            'type' => 'admin',
            'password' => Hash::make('password'),
        ]);
    }
}
