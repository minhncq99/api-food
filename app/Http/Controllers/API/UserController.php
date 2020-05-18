<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    /**
     * Get All user
     */
    public function getAllUser(){
        try{
            $data = DB::table('users')->get();
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
    public function getByUserName(Request $req)
    {
        try{
            $data = DB::table('users')->where('userName', $req->userName)->first();
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
            $data = DB::table('users')
                ->where('userName', $req->userName)
                ->update([
                    'password' => $req->password,
                    'firstName'=> $req->firstName,
                    'lastName' => $req->lastName,
                    'birthDate' => $req->birthDate,
                    'gender' => $req->gender,
                    'address' => $req->address,
                    'email' => $req->email,
                    'typeUserId' => $req->typeUserId,
                    'status' => $req->status,
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
    * Create User
    */
   public function create(Request $req)
   {
       try{
            $data = new User;

            $data->userName = $req->userName;
            $data->password = $req->password;
            $data->firstName = $req->firstName;
            $data->lastName = $req->lastName;
            $data->birthDate = $req->birthDate;
            $data->gender = $req->gender;
            $data->address = $req->address;
            $data->email = $req->email;
            $data->typeUserId = $req->typeUserId;
            $data->status = $req->status;
            $data->createdDate = $req->createdDate;
            
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
