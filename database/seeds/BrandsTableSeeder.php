<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
	            'name' => 'pikollini',
	            'city_id' => '1',
	            'address' => 'novokuznetskaya st.31 /4',
	            'phone'  => '8987713131',
	            'category_id' => '1',
	            'uploads_id' => '1',
	            'links' => 'pikollini.com',
            ],

            [
	            'name' => 'Sonic',
	            'city_id' => '1',
	            'address' => 'ul. 1905 goda  st. 12',
	            'phone'  => '89898346716',
	            'category_id' => '2',
	            'uploads_id' => '2',
	            'links' => 'sonic.com'
       		],

       		[
	            'name' => 'Mango',
	            'city_id' => '8',
	            'address' => 'moskovskaya st.31 /4',
	            'phone'  => '8987568131',
	            'category_id' => '5',
	            'uploads_id' => '1',
	            'links' => 'mango.com',
            ],

            [
	            'name' => 'Ecco',
	            'city_id' => '9',
	            'address' => 'lomonosova st.31 /4',
	            'phone'  => '89875687891',
	            'category_id' => '1',
	            'uploads_id' => '2',
	            'links' => 'ecco.com',
            ],

            [
	            'name' => 'TezTour',
	            'city_id' => '10',
	            'address' => 'kirova st.31 /4',
	            'phone'  => '89845687891',
	            'category_id' => '12',
	            'uploads_id' => '2',
	            'links' => 'teztour.ru',
            ],

            [
	            'name' => 'Samsung',
	            'city_id' => '10',
	            'address' => 'lenina st.31 /4',
	            'phone'  => '8984677891',
	            'category_id' => '7',
	            'uploads_id' => '2',
	            'links' => 'samsung.ru',
            ]
        ]);
    }
}
