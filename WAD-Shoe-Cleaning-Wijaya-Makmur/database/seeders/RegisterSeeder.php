<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'syariif',
            'last_name' => 'bathik',
            'no_hp' => '082140002851',
            'email' => 'abdurrahman1467@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'first_name' => 'haru',
            'last_name' => 'hide',
            'no_hp' => '08214000000',
            'email' => 'haruhide@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('admin'),
        ]);
    }
}