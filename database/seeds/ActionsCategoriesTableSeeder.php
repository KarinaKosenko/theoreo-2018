<?php

use Illuminate\Database\Seeder;

class ActionsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions_categories')->insert([

        	[
        		'action_id' => '1',
        		'category_id' => '1'
        	],

        	[
        		'action_id' => '2',
        		'category_id' => '2'
        	]
        	
        ]);
    }
}
