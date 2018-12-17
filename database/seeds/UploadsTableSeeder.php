<?php

use Illuminate\Database\Seeder;

class UploadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uploads')->insert([

            [
	            'path' => 'f.f25.f2555cb67e26c13a09cc4dda444b72606052447a',
	            'ext' => 'jpg',
	            'size' => '2.2',
	            'old_name'  => 'photo1.jpg',
	            'created_at' => now(),
	            'updated_at' => now()
	        ],

	        [
		        'path' => 'f.f28.f2555cb67e26c13a09cc4dda444b72606052447a',
	            'ext' => 'jpeg',
	            'size' => '2.2',
	            'old_name'  => 'photo2.jpeg',
	            'created_at' => now(),
	            'updated_at' => now()
	        ],

	        [
	            'path' => 'f.a25.f2555cb67e26c13a09cc4dda444b72606052447a',
	            'ext' => 'jpg',
	            'size' => '1.2',
	            'old_name'  => 'photo3.jpg',
	            'created_at' => now(),
	            'updated_at' => now()
	        ],

	        [
	            'path' => 'b.f25.f2555cb67e26c13a09cc4dda444b72606052447a',
	            'ext' => 'jpg',
	            'size' => '2.3',
	            'old_name'  => 'photo4.jpg',
	            'created_at' => now(),
	            'updated_at' => now()
	        ],

	        [
	            'path' => 'd.f25.f2555cb67e26c13a09cc4dda444b72606052447a',
	            'ext' => 'jpg',
	            'size' => '1.2',
	            'old_name'  => 'photo5.jpg',
	            'created_at' => now(),
	            'updated_at' => now()
	        ],

	        [
	            'path' => 'f.d25.f2555cb67e26c13a09cc4dda444b72606052447a',
	            'ext' => 'jpg',
	            'size' => '1.2',
	            'old_name'  => 'photo6.jpg',
	            'created_at' => now(),
	            'updated_at' => now()
	        ]
        ]);
    }
}
