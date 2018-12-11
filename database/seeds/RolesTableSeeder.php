<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	[
                'caption' => 'admin',
                'code' => 'primary'
        	],
        	[
            	'caption' => 'user',
                'code' => 'simple'	
        	],
        	[
            	'caption' => 'manager',
                'code' => 'simple'	
        	]

        ]);
    }
}
