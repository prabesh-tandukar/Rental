<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'prabesh',
            'email' => 'prabesh' . '@gmail.com',
            'phone' => '+977 9841234478',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user' . '@gmail.com',
            'phone' => '+977 9803654317',
            'password' => Hash::make('password'),
        ]);
    }
}
