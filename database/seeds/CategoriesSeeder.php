<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'id' => '1',
                    'name' => 'Дети',
                    'slug' => 'kids',
                ],
                [
                    'id' => '2',
                    'name' => 'Взрослые',
                    'slug' => 'Adults',
                ],
                [
                    'id' => '3',
                    'name' => 'Пожилые',
                    'slug' => 'in_years',
                ],
                [
                    'id' => '4',
                    'name' => 'Животные',
                    'slug' => 'animals',
                ],
                [
                    'id' => '5',
                    'name' => 'Природа',
                    'slug' => 'nature',
                ],
                [
                    'id' => '32',
                    'name' => 'Другое',
                    'slug' => 'other',
                ]
            ]
        );
    }
}
