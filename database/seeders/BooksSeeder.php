<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Writer;

class BooksSeeder extends Seeder
{
     
    public function run(): void
    {
        $this->createBooksFanstasy();

    }
    
    public function createBooksFanstasy(){

        $gnereFanstasy = Genre::where('name', 'Fantasy')->first();

        for ($i=0; $i <10; $i++) {
            $bookFantasy = Book::factory()->create([
                'writer_id' => Writer::factory()->create()->id,
            ]);
            $bookFantasy->genres()->attach($gnereFanstasy->id);
        }
    }
}
