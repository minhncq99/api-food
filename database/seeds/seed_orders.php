<?php

use Illuminate\Database\Seeder;

class seed_orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // order
        for($i = 1; $i <= 5; $i++) {

            DB::table('orders')->insert([
                'name'=> $i .' name',
                'createdDate' => date_create('now'),
                'phoneNumber' => '090456789',
                'status'=> $i .' status',
                'note'=> $i .' note',
                'promotionId'=> $i .' promotionId',
                'customerId'=> '2 userName',
                'shipperId'=> '3 userName',
                'adminId'=> '1 userName',
                'pickUpAddress' => $i .'pickUpAddress',
                'shipAddress' => $i .'shipAddress',
                'shippingCost' => 100000,

                'note'=> $i .' note',

                'adminId'=> $i .' userName',
            ]);
            //promotion details
            DB::table('order_details')->insert([
                'orderId' => $i,
                'dishId'=> $i .' dishId',
                'amount' => 1000,
                'createdDate' => date_create('now'),
            ]);
        }
    }
}
