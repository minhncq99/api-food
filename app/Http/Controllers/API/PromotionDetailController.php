<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PromotionDetail;

class PromotionDetailController extends Controller
{
    //
    /**
     * Get All Promotion Detail
     */
    public function getAll(){
        try{
            $data = DB::table('promotion_details')->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get Promotion Detail by Promotion Detail id 
     */
    public function getOneByPromotion(Request $req)
    {
        try{
            $data = DB::table('promotion_details')->where('promotionId', $req->promotionId)->first();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get Promotion Detail by Restaurant id 
     */
    public function getOneByRestaurant(Request $req)
    {
        try{
            $data = DB::table('promotion_details')->where('restaurantId', $req->restaurantId)->first();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Update Promotion Detail by restaurantId
     */
    public function update(Request $req)
    {
        try{
            $data = DB::table('promotion_details')
                ->where('promotionId', $req->promotionId)
                ->where('restaurantId', $req->restaurantId)
                ->update([
                    'status' => $req->status,
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
    * Create Promotion Detail
    */
   public function create(Request $req)
   {
       try{
            $data = new PromotionDetail;

            $data->promotionId = $req->promotionId;
            $data->restaurantId = $req->restaurantId;
            $data->status = $req->status;
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
