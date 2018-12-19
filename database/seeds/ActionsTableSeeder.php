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
	            'brand_id' => '4',
	            'city_id' => '2',
	            'active_from' => '01.12.2018',
	            'active_to' => '31.12.2018', 
	            'text' => 'women shoes special price',
	            'upload_id' => '1',
	            'status' =>'1',
	            'links'=> 'shoes.com',
	            'type'=> '1'
        	],

            [
	            'name' => 'notebooks',
	            'brand_id' => '6',
	            'city_id' => '3',
	            'active_from' => now(),
	            'active_to' => '15.01.2019',
	            'text' => 'notebook 30% cheaper',
	            'upload_id' => '2',
	            'status' =>'3',
	            'links'=> 'notebooks.com',
	            'type'=> '2'
	        ],
        ]);
    }
}