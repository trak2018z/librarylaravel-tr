<?php

use Illuminate\Database\Seeder;
use App\Books;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $book = new Books();
        $book->title = $faker->text(200);
        $book->author = $faker->text(200);
        $book->description = $faker->text(200);
        $book->img = $faker->text(200);
        $book->year = $faker->numerify();
        $book->save();
    }
}
