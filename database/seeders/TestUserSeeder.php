<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'test@appbook.com'],
            [
                'name' => 'Usuario Test',
                'password' => Hash::make('password123'),
                'first_last_name' => 'Apellido1',
                'second_last_name' => 'Apellido2',
                'birth_date' => '1990-01-01',
            ]
        );
    }
}
