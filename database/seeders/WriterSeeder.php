<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->where('email', 'test@appbook.com')->first();

        if (!$user) {
            return;
        }

        Writer::firstOrCreate(
            ['user_id' => $user->id],
            [
                'username' => 'test_writer',
                'bio' => 'Writer profile for seeding and testing.',
            ]
        );
    }
}
