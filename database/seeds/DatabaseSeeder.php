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
            UserRoleTableSeeder::class,
            PermissionsTableSeeder::class,
            RolePermissionTableSeeder::class,
            UploadsTableSeeder::class,
            CitiesTableSeeder::class,
            CategoriesTableSeeder::class,
            TagsTableSeeder::class,
            BrandsTableSeeder::class, 
            BrandCityTableSeeder::class,
            MenuTableSeeder::class, 
            ActionsTableSeeder::class, 
            ActionTagTableSeeder::class, 
            ActionCategoryTableSeeder::class 
        ]);
    }
}
