<?php

namespace App\Http\Controllers;
use App\Models\cpu;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    public function index(){
        $pu = Cpu::all();

        return response()->json([
            'status'=>200,
            'data'=> $pu,
            'message' => "success",
         ], 200);
    }
    public function create(Request $request){
        $request->validate([
            "name"=> "required",
            "decs"=> "required",
            "type"=>"required",
            "image_url"=> "required",
            "stok"=> "required",
            "price"=> "required",
        ]);
        $cpu = Cpu::create([
            "name"=> $request->name,
            "decs"=> $request->decs,
            "type"=> $request->type,
            "image_url"=> $request->image_url,
            "stok"=> $request->stok,
            "price"=> $request->price,
        ]);
        return response()->json([
            "status"=> 200,
            "data"=> $cpu,
            "message"=> "success",
        ]);
    }
}
