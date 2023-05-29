<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db.comics');

        foreach ($comics as $comicData) {
            $comic = new Comic();
            $comic->title = $comicData['title'];
            $comic->description = $comicData['description'];
            $comic->thumbnail_url = $comicData['thumb'];
            $comic->price = $this->formatPrice($comicData['price']);
            $comic->series = $comicData['series'];
            $comic->sale_date = $comicData['sale_date'];
            $comic->type = $comicData['type'];
            $comic->artists = json_encode($comicData['artists']);
            $comic->writers = json_encode($comicData['writers']);

            $comic->save();
        }
    }

    /**
     * Format the price string into a decimal value.
     *
     * @param  string  $price
     * @return float
     */
    private function formatPrice($price)
    {
        // Rimuovi il simbolo '$' e converte la stringa in un valore float
        return floatval(str_replace('$', '', $price));
    }
}