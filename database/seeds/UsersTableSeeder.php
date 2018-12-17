<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run() 
    {
        DB::table('users')->insert([

            [
                'name' => 'Admin',
                'email' => 'admin@admin.ru',
                'email_verified_at' => now(),
                'password' => bcrypt('111111'),
                'remember_token' => str_random(64),
            ],

            [
                'name' => 'Manager',
                'email' => 'manager@manager.ru',
                'email_verified_at' => now(),
                'password' => bcrypt('222222'),
                'remember_token' => str_random(64),
            ]
        ]);

        factory(App\Models\User::class, 3)->create()->make(); // users без привилегий
    }
}
