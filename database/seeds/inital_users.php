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
        /*
        for($i = 1; $i <= 5; $i++) {
            $sex = false;
            $status = false;
            if($i % 2 ==0){
                $sex = true;
                $status = true;
            }
            DB::table('users')->insert([
                'userName' => Str::random(20),
                'password' => 'password',
                'fitstName'=> 'fitstName ' .Str::random(5),
                'lastName' => 'lastName ' .Str::random(5),
                'birthDate' => '2016-12-06',
                'sex' => $sex,
                'address' => Str::random(20),
                'email' => Str::random(5) .'@gmail.com',
                'level' => rand(0, 2),
                'status' => $status
            ]);
        }
        */
        
    }
}
