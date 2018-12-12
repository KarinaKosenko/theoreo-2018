<?php

use Illuminate\Database\Seeder;

class BrandCityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand_city')->insert([
        	[
        		'brand_id' => '1',
        		'city_id' => '1'
        	],

        	[
        		'brand_id' => '2',
        		'city_id' => '2'
        	],

            [
                'brand_id' => '3',
                'city_id' => '3'
            ],

            [
                'brand_id' => '4',
                'city_id' => '4'
            ],

            [
                'brand_id' => '5',
                'city_id' => '5'
            ],

            [
                'brand_id' => '6',
                'city_id' => '6'
            ]
        ]);
    }
}
