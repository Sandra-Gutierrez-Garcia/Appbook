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
        $this->BookPopulate();
    }
    
    public function BookPopulate(){
        $writer =Writer::factory()->count(5)->create();
        $bookpopulate = Book::factory()->count(10)->create([
            'writer_id' => $writer->random()->id,
        ]);

    }
}
