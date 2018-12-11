<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            
            [
                'caption' => 'Доступ в панель администрирования',
                'code' => 'admin_panel_access'
        	],

            [
                'caption' => 'Нет доступа в панель администрирования',
                'code' => 'admin_panel_access_denied'
            ],

        ]);
    }
}
