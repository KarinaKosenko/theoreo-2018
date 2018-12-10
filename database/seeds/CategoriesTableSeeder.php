<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'Shoes',
        	],

            [
                'name' => 'Computers',
        	],

            [
                'name' => 'Развлечения',
            ],

            [
                'name' => 'Кафе/Рестораны',
            ],

            [
                'name' => 'Одежда',
            ],

            [
                'name' => 'Авто',
            ],

            [
                'name' => 'Электроника',
            ],

            [
                'name' => 'Здоровье',
            ],

            [
                'name' => 'Для дома',
            ],

            [
                'name' => 'Строительство',
            ],

            [
                'name' => 'Услуги',
            ],

            [
                'name' => 'Туризм',
            ]

        ]);
    }
}
