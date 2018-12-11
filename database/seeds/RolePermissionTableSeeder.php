<?php

use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('role_permission')->insert([
       		[
       			'role_id' => '2', // админ
       			'permission_id' => '1'
       		],

       		[
       			'role_id' => '3', // user
       			'permission_id' => '2'
       		],

       		[
       			'role_id' => '6', // manager
       			'permission_id' => '1'
       		]
       ]);
    }
}
