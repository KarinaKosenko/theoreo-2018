<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insert([

           [
	            'name' => 'shoes',
	            'brand_id' => '1',
	            'city_id' => '8',
	            'active_from' => '01.12.2018',
	            'active_to' => '31.12.2018', 
	            'text' => 'women shoes special price',
	            'upload_id' => '1',
	            'status' =>'1',
	            'links'=> 'shoes.com',
	            'type'=> 'sale'
        	],

            [
	            'name' => 'notebooks',
	            'brand_id' => '2',
	            'city_id' => '9',
	            'active_from' => now(),
	            'active_to' => '15.01.2019',
	            'text' => 'notebook 30% cheaper',
	            'upload_id' => '2',
	            'status' =>'1',
	            'links'=> 'notebooks.com',
	            'type'=> 'sale'
	        ]
        ]);
    }
}
