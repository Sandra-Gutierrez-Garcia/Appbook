<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Fantasy',
            'Science Fiction',
            'Mystery',
            'Thriller',
            'Romance',
            'Western',
            'Dystopian',
            'Contemporary',
            'Historical Fiction',
            'Horror',
        ];

        foreach ($genres as $genreName) {
            Genre::firstOrCreate(
                ['name' => $genreName],
                ['description' => $genreName . ' books and stories.']
            );
        }
    }
}
