<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Get All user
     */
    function getAllUser(){
        try{
            $data = DB::table('users')->get();
            $error = null;
        }
        catch(Exepsion $ex){
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
        catch(Exepsion $ex){
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
                    "password" => $req->password,
                    "firstName" => $req->firstName,
                    "lastName" => $req->lastName,
                    "birthDate" => $req->birthDate,
                    "gender" => $req->gender,
                    "address" => $req->address,
                    "email" => $req->email,
                    "typeUserId" => $req->typeUserId,
                    "status" => $req->status,
                    "createdDate" => $req->createdDate
                    ]);
            $error = null;
        }
        catch(Exepsion $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }
}
