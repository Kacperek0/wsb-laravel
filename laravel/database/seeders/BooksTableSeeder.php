<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
            [
                'name' => 'Laravel 8',
                'year' => '2021',
                'publication_place' => 'San Francisco',
                'pages' => '800',
                'price' => '66.50'
            ]
        );
    }
}
