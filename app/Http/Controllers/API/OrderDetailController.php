<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OrderDetail;

class OrderDetailController extends Controller
{
    //
    /**
     * Get All Order Detail
     */
    public function getAll(){
        try{
            $data = DB::table('order_details')->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get order by dish id
     */
    public function getOneByDish(Request $req)
    {
        try{
            $data = DB::table('order_details')->where('dishId', $req->dishId)->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get order by order id
     */
    public function getOneByOrder(Request $req)
    {
        try{
            $data = DB::table('order_details')->where('orderId', $req->orderId)->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Update Order Detail by OrderDetail id
     */
    public function update(Request $req)
    {
        try{
            $data = DB::table('order_details')
                ->where('orderId', $req->orderId)
                ->where('dishId', $req->dishId)
                ->update([
                    'amount' => $req->amount,
                    'createdDate' => $req->createdDate
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
    * Create Order Detail
    */
   public function create(Request $req)
   {
       try{
            $data = new OrderDetail;

            $data->orderId = $req->orderId;
            $data->dishId = $req->dishId;
            $data->amount = $req->amount;
            $data->createdDate = date("Y-m-d H:i:s");

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
