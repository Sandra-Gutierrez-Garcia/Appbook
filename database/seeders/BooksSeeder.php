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
        $this->BookAction();
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
        $romance = Genre::firstOrCreate(['name' => 'Romance']);
        
        for ($i = 0; $i < 5; $i++) {
            $book = Book::factory()->create([
                'writer_id' => $writer->random()->id,
            ]);
            // attach romance genre to book
            $book->genres()->attach($romance->id);
        }

    }
     public function BookAction(){
        $writer =Writer::factory()->count(5)->create();
        // create action genre
        $action = Genre::firstOrCreate(['name' => 'Action']);
        
        for ($i = 0; $i < 5; $i++) {
            $book = Book::factory()->create([
                'writer_id' => $writer->random()->id,
            ]);
            // attach action genre to book
            $book->genres()->attach($action->id);
        }

    }
}
