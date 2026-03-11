<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Writer;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // frist we need to get the writers and genres to associate with the books
        $writers = Writer::all();
        $genres = Genre::all();

        // create 10 books diferent with random data
        for ($i = 0; $i < 10; $i++) {
            $book = Book::factory()->create([
                'writer_id' => $writers->random()->id,
            ]);
            $book->genres()->attach($genres->random()->id);
        }

    }
}
