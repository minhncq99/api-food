<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TypeRestaurant;

class TypeRestaurantController extends Controller
{
    /**
     * Get All Type Restaurant
     */
    public function getAll(){
        try{
            $data = DB::table('type_restaurants')->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get Type Retaurant by restaurant id
     */
    public function getOne(Request $req)
    {
        try{
            $data = DB::table('type_restaurants')->where('typeRestaurantId', $req->typeRestaurantId)->first();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Update Type Restaurant
     */
    public function update(Request $req)
    {
        try{
            $data = DB::table('type_restaurants')
                ->where('typeRestaurantId', $req->typeRestaurantId)
                ->update([
                    'name' => $req->name,
                    'note' => $req->note
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
            $data = new TypeRestaurant;

            $data->typeRestaurantId = $req->typeRestaurantId;
            $data->name = $req->name;
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
