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
      $this->call(PropertiesSeeder::class);
      $this->call(CategoriesSeeder::class);
      $this->call(ProductsSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
