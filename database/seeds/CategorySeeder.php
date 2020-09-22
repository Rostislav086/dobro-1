<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => '1',
                'name' => 'Дети',
                'slug' => 'kids'
            ],
            [
                'id' => '2',
                'name' => 'Взрослые',
                'slug' => 'adults'
            ],
            [
                'id' => '3',
                'name' => 'Пожилые',
                'slug' => 'in-years'
            ],
            [
                'id' => '4',
                'name' => 'Животные',
                'slug' => 'animals'
            ],
            [
                'id' => '5',
                'name' => 'Природа',
                'slug' => 'nature'
            ],
            [
                'id' => '6',
                'name' => 'Другое',
                'slug' => 'other'
            ]
        ]);
    }
}
