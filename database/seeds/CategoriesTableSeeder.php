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
                'type_action' => 'action'
        	],

            [
                'name' => 'Computers',
                'type_action' => 'sale'
        	],

            [
                'name' => 'Развлечения',
                'type_action' => 'action'
            ],

            [
                'name' => 'Кафе/Рестораны',
                'type_action' => 'action'
            ],

            [
                'name' => 'Одежда',
                'type_action' => 'sale'
            ],

            [
                'name' => 'Авто',
                'type_action' => 'sale'
            ],

            [
                'name' => 'Электроника',
                'type_action' => 'sale'
            ],

            [
                'name' => 'Здоровье',
                'type_action' => 'action'
            ],

            [
                'name' => 'Для дома',
                'type_action' => 'action'
            ],

            [
                'name' => 'Строительство',
                'type_action' => 'sale'
            ],

            [
                'name' => 'Услуги',
                'type_action' => 'action'
            ],

            [
                'name' => 'Туризм',
                'type_action' => 'action'
            ]

        ]);
    }
}
