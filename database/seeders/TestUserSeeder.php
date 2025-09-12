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
        $user = User::firstOrCreate(
            ['email' => 'test@appbook.com'],
            [
                'name' => 'Usuario Test',
                'password' => Hash::make('password123'),
                'birthday_date' => '1990-01-01',
            ]
        );
        
        $user->assignRole('reader');
    }
}
