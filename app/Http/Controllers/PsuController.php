<?php

namespace App\Http\Controllers;
use App\Models\psu;
use Illuminate\Http\Request;

class PsuController extends Controller
{
    public function index(){
        $pu = psu::all();

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
        $psu = psu::create([
            "name"=> $request->name,
            "desc"=> $request->desc,
            "image_url"=> $request->image_url,
            "stok"=> $request->stok,
            "price"=> $request->price,
        ]);
        return response()->json([
            "status"=> 200,
            "data"=> $psu,
            "message"=> "success",
        ]);
    }
}
