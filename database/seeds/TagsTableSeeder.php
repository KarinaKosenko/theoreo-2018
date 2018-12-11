<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	[ 'name' => 'shoes' ],
        	[ 'name' => 'clothes' ],
        	[ 'name' => 'books' ],
        	[ 'name' => 'laptops' ],
        	[ 'name' => 'tablets' ],
        	[ 'name' => 'phones' ],
        	[ 'name' => 'food' ],
        	[ 'name' => 'toys' ],
        ]);
    }
}
