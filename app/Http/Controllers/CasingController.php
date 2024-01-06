<?php

namespace App\Http\Controllers;
use App\Models\casing;
use Illuminate\Http\Request;

class CasingController extends Controller
{
    public function index(){
        $pu = casing::all();

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
            "size"=>"required",
            "stok"=> "required",
            "price"=> "required",
        ]);
        $casing = casing::create([
            "name"=> $request->name,
            "desc"=> $request->desc,
            "image_url"=> $request->image_url,
            "size"=> $request->size,
            "stok"=> $request->stok,
            "price"=> $request->price,
        ]);
        return response()->json([
            "status"=> 200,
            "data"=> $casing,
            "message"=> "success",
        ]);
    }
}
