<?php

namespace App\Http\Controllers;
use App\Models\vga;
use Illuminate\Http\Request;

class VgaController extends Controller
{
    public function index(){
        $pu = vga::all();

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
        $vga = vga::create([
            "name"=> $request->name,
            "desc"=> $request->desc,
            "image_url"=> $request->image_url,
            "stok"=> $request->stok,
            "price"=> $request->price,
        ]);
        return response()->json([
            "status"=> 200,
            "data"=> $vga,
            "message"=> "success",
        ]);
    }
}
