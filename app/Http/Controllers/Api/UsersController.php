<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return User::where('userName', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        if( User::where('userName', $id)->first()->email != $request->email){
            $string = User::where('userName', $id)->update([
                'password' => $request->password,
                'fitstName' => $request->fitstName,
                'lastName' => $request->lastName,
                'birthDate' => $request->birthDate,
                'sex' => $request->sex,
                'address' => $request->address,
                'email' => $request->email,
                'level' => $request->level,
                'status' => $request->status
            ]);
        } else {
            $string = User::where('userName', $id)->update([
                'password' => $request->password,
                'fitstName' => $request->fitstName,
                'lastName' => $request->lastName,
                'birthDate' => $request->birthDate,
                'sex' => $request->sex,
                'email' => $request->email,
                'level' => $request->level,
                'status' => $request->status
            ]);
        }
        return $string;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        return User::where('userName', $id)->delete();

    }
}
