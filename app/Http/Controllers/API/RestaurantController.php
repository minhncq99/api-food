<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Get All Restaurant
     */
    function getAll(){
        try{
            $data = DB::table('restaurants')->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get Restaurant by RestaurantId
     */
    public function getOne(Request $req)
    {
        try{
            $data = DB::table('restaurants')->where('restaurantId', $req->restaurantId)->first();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * UpdateRestaurant
     */
    public function update(Request $req)
    {
        try{
            $data = DB::table('restaurants')
                ->where('restaurantId', $req->restaurantId)
                ->update([
                    'name' => $req->name,
                    'createdDate'=> $req->createdDate,
                    'status' => $req->status,
                    'openTime'=> $req->openTime,
                    'closeTime' => $req->closeTime,
                    'managerId'=> $req->managerId,
                    'typeRestaurantId' => $req->typeRestaurantId,
                    'note'=> $req->note
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
    * Create Restaurant
    */
   public function create(Request $req)
   {
       try{
            $data = new Restaurant;

            $data->restaurantId = $req->restaurantId;
            $data->name = $req->name;
            $data->createdDate = $req->createdDate;
            $data->status = $req->status;
            $data->openTime = $req->openTime;
            $data->closeTime = $req->closeTime;
            $data->managerId = $req->managerId;
            $data->typeRestaurantId = $req->typeRestaurantId;
            $data->note = $req->note;
            
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
