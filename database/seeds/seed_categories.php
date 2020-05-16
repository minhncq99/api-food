<?php

use Illuminate\Database\Seeder;

class seed_categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 5; $i++){
            DB::table('categories')->insert([
                'categoryId' =>  $i .' categoryId',
                'description' => $i .'description',
                'name' => $i .' Name',
                'note' => $i .' Note',
                'createdDate' => date_create('now'),
            ]);
        }
    }
}
