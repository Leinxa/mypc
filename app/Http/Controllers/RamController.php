<?php

namespace App\Http\Controllers;
use App\Models\ram;
use Illuminate\Http\Request;

class RamController extends Controller
{
    public function index(){
        $pu = ram::all();

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
            "size"=> "required",
            "image_url"=> "required",
            "type"=>"required",
            "speed"=> "required",
            "kapasitas"=> "required",
            "stok"=> "required",
            "price"=> "required",
        ]);
        $ram = ram::create([
            "name"=> $request->name,
            "desc"=> $request->desc,
            "image_url"=> $request->image_url,
            "size"=> $request->size,
            "type"=> $request->type,
            "speed"=> $request->speed,
            "kapasitas"=> $request->kapasitas,
            "stok"=> $request->stok,
            "price"=> $request->price,
        ]);
        return response()->json([
            "status"=> 200,
            "data"=> $ram,
            "message"=> "success",
        ]);
    }
}
