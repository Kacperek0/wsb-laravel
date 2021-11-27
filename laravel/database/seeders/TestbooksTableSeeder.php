<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TestbooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testbooks')->insert(
            [
                'name' => 'Ogniem i mieczem',
                'year' => 1994,
                'publication_place' => 'Poznan',
                'pages' => 100,
                'price' => 80.95
            ]
        );

        DB::table('testbooks')->insert(
            [
                'name' => 'Ogniem i mieczem',
                'year' => 1994,
                'publication_place' => 'Poznan',
                'pages' => 100,
                'price' => 100.95
            ]
        );
    }
}
