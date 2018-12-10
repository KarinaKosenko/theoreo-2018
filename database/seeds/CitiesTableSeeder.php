<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\City::class, 3)->create()->make();

        DB::table('cities')->insert([
        	[
        		'name' => 'Москва',
        		
        	],

        	[
        		'name' => 'Санкт-Петербург',
        	],

        	[
        		'name' => 'Новосибирск',
        	],

        	[
        		'name' => 'Екатеринбург',
        	],

        	[
        		'name' => 'Липецк',
        	]

        ]);
    }
}
