<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;

class OrdersController extends Controller
{
    //
    /**
     * Get All Order
     */
    public function getAll(){
        try{
            $data = DB::table('orders')->get();
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
    public function getOne(Request $req)
    {
        try{
            $data = DB::table('orders')->where('orderId', $req->orderId)->first();
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
            $data = DB::table('orders')
                ->where('orderId', $req->orderId)
                ->update([
                    'name' => $req->name,
                    'createdDate' => $req->createdDate,
                    'phoneNumber' => $req->phoneNumber,
                    'status' => $req->status,
                    'note' => $req->note,
                    'promotionId' => $req->promotionId,
                    'customerId' => $req->customerId,
                    'shipperId' => $req->shipperId,
                    'adminId' => $req->adminId
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
    * Create Order
    */
   public function create(Request $req)
   {
       try{
            $data = new Order;

            $data->name = $req->name;
            $data->createdDate = $req->createdDate;
            $data->phoneNumber = $req->phoneNumber;
            $data->status = $req->status;
            $data->note = $req->note;
            $data->promotionId = $req->promotionId;
            $data->customerId = $req->customerId;
            $data->shipperId = $req->shipperId;
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
