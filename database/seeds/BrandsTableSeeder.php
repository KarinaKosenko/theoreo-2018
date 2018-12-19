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
	            'upload_id' => '1',
	            'links' => 'pikollini.com',
            ],

            [
	            'name' => 'Sonic',
	            'city_id' => '2',
	            'address' => 'ul. 1905 goda  st. 12',
	            'phone'  => '89898346716',
	            'upload_id' => '2',
	            'links' => 'sonic.com'
       		],

       		[
	            'name' => 'Mango',
	            'city_id' => '3',
	            'address' => 'moskovskaya st.31 /4',
	            'phone'  => '8987568131',
	            'upload_id' => '3',
	            'links' => 'mango.com',
            ],

            [
	            'name' => 'Ecco',
	            'city_id' => '4',
	            'address' => 'lomonosova st.31 /4',
	            'phone'  => '89875687891',
	            'upload_id' => '4',
	            'links' => 'ecco.com',
            ],

            [
	            'name' => 'TezTour',
	            'city_id' => '4',
	            'address' => 'kirova st.31 /4',
	            'phone'  => '89845687891',
	            'upload_id' => '5',
	            'links' => 'teztour.ru',
            ],

            [
	            'name' => 'Samsung',
	            'city_id' => '4',
	            'address' => 'lenina st.31 /4',
	            'phone'  => '8984677891',
	            'upload_id' => '6',
	            'links' => 'samsung.ru',
            ]
        ]);
    }
}