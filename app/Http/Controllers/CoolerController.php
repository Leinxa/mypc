<?php

namespace App\Http\Controllers;
use App\Models\cooler;
use Illuminate\Http\Request;

class CoolerController extends Controller
{
    public function index(){
        $pu = cooler::all();

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
            "stok"=> "required",
            "price"=> "required",
        ]);
        $cooler = cooler::create([
            "name"=> $request->name,
            "desc"=> $request->desc,
            "image_url"=> $request->image_url,
            "stok"=> $request->stok,
            "price"=> $request->price,
        ]);
        return response()->json([
            "status"=> 200,
            "data"=> $cooler,
            "message"=> "success",
        ]);
    }
}
