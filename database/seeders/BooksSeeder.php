<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Writer;
use App\Models\Genre;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->BookPopulate();
        $this->BookRomance();
    }
    
    public function BookPopulate(){
        $writer =Writer::factory()->count(5)->create();
        $bookpopulate = Book::factory()->count(10)->create([
            'writer_id' => $writer->random()->id,
        ]);

    }
    public function BookRomance(){
        $writer =Writer::factory()->count(5)->create();
        // create romance genre
        $romance = Genre::factory()->create(['name' => 'Romance']);
        
        for ($i = 0; $i < 5; $i++) {
            $book = Book::factory()->create([
                'writer_id' => $writer->random()->id,
            ]);
            // attach romance genre to book
            $book->genres()->attach($romance->id);
        }

    }
}
