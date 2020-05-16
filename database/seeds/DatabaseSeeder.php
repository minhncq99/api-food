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
        $this->call(inital_users::class);
        $this->call(seed_restaurants::class);
        $this->call(seed_categories::class);
        $this->call(seed_dishes::class);
        $this->call(seed_promotions::class);
        $this->call(seed_orders::class);
        
        // $this->call(UserSeeder::class);
    }
}
