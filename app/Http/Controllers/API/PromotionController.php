<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Promotion;

class PromotionController extends Controller
{
    /**
     * Get All Promotion
     */
    public function getAll(){
        try{
            $data = DB::table('promotions')->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get Promotion by Promotion id
     */
    public function getOne(Request $req)
    {
        try{
            $data = DB::table('promotions')->where('promotionId', $req->promotionId)->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Update Promotion
     */
    public function update(Request $req)
    {
        try{
            $data = DB::table('promotions')
                ->where('promotionId', $req->promotionId)
                ->update([
                    'name' => $req->name,
                    'amount' => $req->amount,
                    'openDate' => $req->openDate,
                    'closeDate' => $req->closeDate,
                    'note' => $req->note,
                    'adminId' => $req->adminId,
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
    * Create Promotion
    */
   public function create(Request $req)
   {
       try{
            $data = new Promotion;

            $data->promotionId = $req->promotionId;
            $data->name = $req->name;
            $data->amount = $req->amount;
            $data->openDate = $req->openDate;
            $data->closeDate = $req->closeDate;
            $data->note = $req->note;
            $data->adminId = $req->adminId;
            
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
