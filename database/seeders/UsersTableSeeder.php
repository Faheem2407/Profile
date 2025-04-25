<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Faheem2407',
                'email' => 'faheem24072000@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Destination@404'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ]
        ]);
    }
}
