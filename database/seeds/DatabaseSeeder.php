<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('actions')->insert([

            'name' => 'shoes',
            'brand_id' => '1',
            'city_id' => '1',
            'description' => 'women shoes special price',
            'uploads_id' => '1',
            'status' =>'1',
            'links'=> 'shoes.com',
            'type'=> 'sale',

            'name' => 'notebooks',
            'brand_id' => '2',
            'city_id' => '2',
            'description' => 'notebook 30% cheaper',
            'uploads_id' => '1',
            'status' =>'1',
            'links'=> 'notebooks.com',
            'type'=> 'sale'
        ]);

      DB::table('actions_categories')->insert([
            'action_id' => '1',
            'category_id' => '1',

            'action_id' => '2',
            'category_id' => '2'
        ]);

      DB::table('action_tag')->insert([
            'action_id' => '1',
            'tag_id' => '1',

            'action_id' => '2',
            'tag_id' => '2'
        ]);

      DB::table('brands')->insert([
            'name' => 'pikollini',
            'city_id' => '1',
            'address' => 'novokuznetskaya st.31 /4'
            'phone'  => '8987713131',
            'category_id' => '1',
            'uploads_id' => '1',
            'links' => 'pikollini.com',


            'name' => 'Sonic',
            'city_id' => '1',
            'address' => 'ul. 1905 goda  st. 12'
            'phone'  => '89898346716',
            'category_id' => '2',
            'uploads_id' => '2',
            'links' => 'sonic.com'
        ]);

      DB::table('brands_city')->insert([
            'brand_id' => '1',
            'city_id' => '1',

            'brand_id' => '2',
            'city_id' => '2'
        ]);

       DB::table('categories')->insert([
            'name' => 'Shoes',
            'type_action' => 'action',

            'name' => 'Computers',
            'type_action' => 'sale'
        ]);
        
        DB::table('city')->insert([
            'name' => 'Saint.P',
            'name' => 'Moscow',
        ]);

        DB::table('menu')->insert([
            'parent_id' => '1',
            'code' =>'town1',

            'parent_id' => '1',
            'code' =>'town2'
        ]);

       DB::table('migrations')->insert([
           'migration' => 'Shoes',
           'batch'=>'113434',

           'migration' => 'Shoes',
           'batch'=>'113434'
        ]);


        DB::table('permissions')->insert([
            'caption' => 'alowed',
            'code' => 'useralowed'

            'caption' => 'alowed',
            'code' => 'useralowed'
        ]);

        DB::table('role')->insert([
            'caption' => 'admin',
            'code' => 'primary'

            'caption' => 'user',
            'code' => 'simple'
        ]);

        DB::table('role_permissions')->insert([
            'role_id' => '1',
            'permission_id' => '1'

            'role_id' => '2',
            'permission_id' => 'simple'
        ]);

        DB::table('tags')->insert([
            'name' => 'shoes',
            'name' => 'notebooks',
        ]);


            

        DB::table('uploads')->insert([
            'path' => '\storage',
            'ext' => 'oooooo',
            'size' => '2.2'
            'old_name'  => 'photo1',
            'mime' => 'aaaa',
            'created_at' => '1',
            'links' => 'pikollini.com', 

            'path' => '\storage2',
            'ext' => 'oooooo',
            'size' => '2.2'
            'old_name'  => 'photo1',
            'mime' => 'bbbb',
            'created_at' => '',
            'links' => 'pikollini.com'
        ]);






         DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);


    }
}
