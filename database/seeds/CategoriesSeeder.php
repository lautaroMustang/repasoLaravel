<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(\App\Category::class, 5)->create()->each(function ($elem) {
          $elem->products()->save(factory(App\Product::class)->make());
      });
    }


    // Si quisieramos hacer más de uno por categoría:
    // ```php
    // public function run()
    // {
    //     factory(\App\Category::class, 5)->create()->each(function ($elem) {
    //         $elem->products()->saveMany(factory(App\Product::class, 5)->make());
    //     });
    // }
}
