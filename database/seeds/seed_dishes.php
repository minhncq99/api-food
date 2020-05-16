<?php

use Illuminate\Database\Seeder;

class seed_dishes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 5; $i++) {
 
            DB::table('dishes')->insert([
                'dishId' => $i .' dishId',
                'name'=> 'name ' .Str::random(5),
                'createdDate' => date("Y-m-d"),
                'note' => $i .' note',
                'categoryId' => $i .' categoryId',
                'restaurantId' => $i .' restaurantId',
            ]);
        }
    }
}
