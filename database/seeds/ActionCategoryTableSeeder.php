<?php

use Illuminate\Database\Seeder;

class ActionCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('action_category')->insert([

        	[
        		'action_id' => '1',
        		'category_id' => '3'
        	],

        	[
        		'action_id' => '2',
        		'category_id' => '5'
        	]
        	
        ]);
    }
}