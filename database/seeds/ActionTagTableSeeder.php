<?php

use Illuminate\Database\Seeder;

class ActionTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('action_tag')->insert([
        	[
	            'action_id' => '1',
	            'tag_id' => '1'
        	],

        	[
	            'action_id' => '2',
	            'tag_id' => '2'
        	]
        ]);
    }
}
