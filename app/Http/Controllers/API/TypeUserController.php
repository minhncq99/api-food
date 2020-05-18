<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TypeUser;

class TypeUserController extends Controller
{
    /**
     * Get All user
     */
    public function getAll(){
        try{
            $data = DB::table('type_user')->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get User by user name
     */
    public function getOne(Request $req)
    {
        try{
            $data = DB::table('type_user')->where('typeUserId', $req->typeUserId)->first();
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
            $data = DB::table('type_user')
                ->where('typeUserId', $req->typeUserId)
                ->update([
                    'name' => $req->name,
                    'note'=> $req->note,
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
            $data = new TypeUser;

            $data->typeUserId = $req->typeUserId;
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
