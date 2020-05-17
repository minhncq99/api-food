<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dish;


class DishController extends Controller
{
    /**
     * Get All Dish
     */
    function getAll(){
        try{
            $data = DB::table('dishes')->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get Dish by Dish ID
     */
    public function getOne(Request $req)
    {
        try{
            $data = DB::table('dishes')->where('dishId', $req->dishId)->first();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Update User
     */
    public function update(Request $req)
    {
        try{
            $data = DB::table('dishes')
                ->where('dishId', $req->dishId)
                ->update([
                    'name' => $req->name,
                    'createdDate'=> $req->createdDate,
                    'unit' => $req->unit,
                    'note'=> $req->note,
                    'categoryId' => $req->categoryId,
                    'restaurantId'=> $req->restaurantId,
                    ]);
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }
    /** 
    * Create User
    */
   public function create(Request $req)
   {
       try{
            $data = new Dish;

            $data->dishId = $req->dishId;
            $data->name = $req->name;
            $data->createdDate = $req->createdDate;
            $data->unit = $req->unit;
            $data->note = $req->note;
            $data->categoryId = $req->categoryId;
            $data->restaurantId = $req->restaurantId;
            
            $data->save();

           $error = null;
       }
       catch(Exception $ex){
           $data = null;
           $error = $ex;
       }
       return response()->json(['data' => $data, 'error' => $error]);
   }
}
