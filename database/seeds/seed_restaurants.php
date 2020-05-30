<?php

use Illuminate\Database\Seeder;

class seed_restaurants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // type restaurant
        for($i = 1 ; $i <= 5; $i++){
            DB::table('type_restaurants')->insert([
                'typeRestaurantId' =>  $i .' typeRestaurantId',
                'name' => $i .' Name',
                'note' => $i .' Note',
            ]);
        }

        // restaurant
        for($i = 1; $i <= 5; $i++){
            DB::table('restaurants')->insert([
                'restaurantId' => $i .' restaurantId',
                'name' => $i. 'name',
                'createdDate' => date_create('now'),
                'status' => $i .'status',
                'openTime' => '8:00 am',
                'closeTime' => '8:00 pm',
                'managerId' => $i .' userName',
                'typeRestaurantId' => $i .' typeRestaurantId',
                'note' => $i .'note',
                'address' => $i .'address',
            ]);
        }

    }
}
