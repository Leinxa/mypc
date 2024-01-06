<?php

namespace App\Http\Controllers;
use App\Models\storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index(){
        $pu = storage::all();

        return response()->json([
            'status'=>200,
            'data'=> $pu,
            'message' => "success",
         ], 200);
    }
    public function create(Request $request){
        $request->validate([
            "name"=> "required",
            "desc"=> "required",
            "image_url"=> "required",
            "type"=>"required",
            "kapasitas"=> "required",
            "stok"=> "required",
            "price"=> "required",
        ]);
        $storage = storage::create([
            "name"=> $request->name,
            "desc"=> $request->desc,
            "image_url"=> $request->image_url,
            "type"=> $request->type,
            "kapasitas"=> $request->kapasitas,
            "stok"=> $request->stok,
            "price"=> $request->price,
        ]);
        return response()->json([
            "status"=> 200,
            "data"=> $storage,
            "message"=> "success",
        ]);
    }
}
