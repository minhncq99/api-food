<?php

use Illuminate\Database\Seeder;

class seed_promotions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // promotions
        for($i = 1; $i <= 5; $i++) {
            
            DB::table('promotions')->insert([
                'promotionId' => $i .' promotionId',
                'name'=> $i .' name',
                'amount' => 100,
                'openDate' => date_create('now'),
                'closeDate' => date_create('now')->add(new DateInterval('P100D')),
                'note'=> $i .' note',
                'adminId'=> $i .' userName',
            ]);
            //promotion details
            DB::table('promotion_details')->insert([
                'promotionId' => $i .' promotionId',
                'restaurantId'=> $i .' restaurantId',
                'status' => 'status',
                'note'=> $i .' note',
            ]);
        }
    }
}
