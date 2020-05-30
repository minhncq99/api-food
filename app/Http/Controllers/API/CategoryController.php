<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Get All Categoties
     */
    public function getAll(){
        try{
            $data = DB::table('categories')->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Get Category by Category ID
     */
    public function getOne(Request $req)
    {
        try{
            $data = DB::table('categories')->where('categoryId', $req->categoryId)->get();
            $error = null;
        }
        catch(Exception $ex){
            $data = null;
            $error = $ex;
        }
        return response()->json(['data' => $data, 'error' => $error]);
    }

    /**
     * Update Category
     */
    public function update(Request $req)
    {
        try{
            $data = DB::table('categories')
                ->where('categoryId', $req->categoryId)
                ->update([
                    'name' => $req->name,
                    'description'=> $req->description,
                    'createdDate' => $req->createdDate,
                    'note'=> $req->note,
                    'img' => $req->img,
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
            $data = new Category;

            $data->categoryId = $req->categoryId;
            $data->name = $req->name;
            $data->description = $req->description;
            $data->createdDate = date("Y-m-d H:i:s");
            $data->note = $req->note;
            $data->img = $req->img;

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
