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
        // $this->call(UserSeeder::class);
        factory(App\District::class, 1000)->create();

        factory(App\User::class, 10)->create()->each(function($u){
            $u->offers()
              ->saveMany(
                  factory(App\Offer::class, 5 )->make()
              );
    });

    factory(App\RealEstate::class, 50)->create();

    }
}
