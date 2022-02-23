<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<20; $i++){
            $comic = new Comic();
            $comic->title = $faker->word();
            $comic->description = $faker->words(3, true);
            $comic->author = $faker->word();
            $comic->publishing_house = $faker->word();
            $comic->number_of_pages = $faker->randomNumber(3, false);
            $comic->thumb = $faker->imageUrl(640, 480, 'comics', true);
            $comic->edition = $faker->randomNumber(3, false);
            $comic->price = $faker->randomFloat(1,29,49);
            $comic->save();
        }
    }
}
