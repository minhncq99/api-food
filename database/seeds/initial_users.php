<?php

use Illuminate\Database\Seeder;

class inital_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /**
         * user Admin id = Adm, Admin
         * 
         * user Customer id = Cus, Customer
         * 
         * user Shipper id = Shi, Shipper
         * 
         * user Restaurant id = Res, Restaurant
         */
        // Admin
        DB::table('type_user')->insert([
            'typeUserId' =>  'Adm',
            'name' => 'Admin'
        ]);
        //Customer
        DB::table('type_user')->insert([
            'typeUserId' => 'Cus',
            'name' => 'Customer',
        ]);
        // Shipper
        DB::table('type_user')->insert([
            'typeUserId' => 'Shi',
            'name' => 'Shipper',
        ]);
        // Restaurant
        DB::table('type_user')->insert([
            'typeUserId' => 'Res',
            'name' => 'Restaurant',
        ]);
        
        // seed user
        $typeUser = array('Adm', 'Cus', 'Shi', 'Res', 'Cus');
        for($i = 0; $i <= 4; $i++) {
            if($i % 2 == 0){
            }
            DB::table('users')->insert([
                'userName' => Str::random(20),
                'password' => 'password',
                'fitstName'=> 'fitstName ' .Str::random(5),
                'lastName' => 'lastName ' .Str::random(5),
                'birthDate' => '2016-12-06',
                'sex' => Str::random(3),
                'address' => Str::random(20),
                'email' => Str::random(5) .'@gmail.com',
                'typeUserId' => $typeUser[$i],
                'status' => Str::random(3),
                'createdDate' => date("Y-m-d"),
            ]);
        }
    }
}
