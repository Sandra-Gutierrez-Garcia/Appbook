<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Writer;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $writers = Writer::query()->pluck('id');

        if ($writers->isEmpty()) {
            return;
        }

        $statuses = ['finished', 'starting', 'paused', 'abandoned'];

        for ($i = 0; $i < 10; $i++) {
            Book::create([
                'title' => fake()->sentence(4),
                'description' => fake()->paragraph(),
                'status' => fake()->randomElement($statuses),
                'writer_id' => $writers->random(),
            ]);
        }
    }
}
