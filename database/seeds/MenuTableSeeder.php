<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
        	[
	            'parent_id' => '0',
	            'code' =>'Управление акциями'
        	],

            [
	            'parent_id' => '0',
	            'code' =>'Управление брендами'
        	],

        	[
	            'parent_id' => '0',
	            'code' =>'Модерация контента'
        	],

        	[
	            'parent_id' => '0',
	            'code' =>'Управление пользователями'
        	],

        	[
	            'parent_id' => '0',
	            'code' =>'Биллинг'
        	],

        	[
	            'parent_id' => '0',
	            'code' =>'Поисковые запросы'
        	],

        	[
	            'parent_id' => '0',
	            'code' =>'Логи парсера'
        	]

        ]);

    }
}
