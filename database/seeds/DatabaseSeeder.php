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
        $this->call([
            UsersTableSeeder::class, 
            RolesTableSeeder::class, 
            BrandsTableSeeder::class, 
            CategoriesTableSeeder::class, 
            CitiesTableSeeder::class, 
            MenuTableSeeder::class, 
            PermissionsTableSeeder::class, 
            TagsTableSeeder::class, 
            ActionsTableSeeder::class, 
            ActionTagTableSeeder::class, 
            ActionsCategoriesTableSeeder::class, 
            BrandCityTableSeeder::class, 
            RolePermissionTableSeeder::class
        ]);
    }
}
