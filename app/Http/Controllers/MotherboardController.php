<?php

namespace App\Http\Controllers;
use App\Models\motherboard;
use Illuminate\Http\Request;

class MotherboardController extends Controller
{
    public function index(){
        $pu = motherboard::all();

        return response()->json([
            'status'=>200,
            'data'=> $pu,
            'message' => "success",
         ], 200);
    }
    public function create(Request $request){
        $request->validate([
            "nama"=> "required",
            "desc"=> "required",
            "image_url"=> "required",
            "form_factor"=> "required",
            "chipset"=> "required",
            "ram_slot"=> "required",
            "min_ram_speed"=> "required",
            "max_ram_speed"=> "required",
            "storage_slot"=> "required",
            "vga_slot"=> "required",
            "stok"=> "required",
            "price"=> "required",
        ]);
        $motherboard = motherboard::create([
            "nama"=> $request->nama,
            "desc"=> $request->desc,
            "image_url"=> $request->image_url,
            "stok"=> $request->stok,
            "chipset"=> $request->chipset,
            "form_factor"=> $request->form_factor,
            "ram_slot"=> $request->ram_slot,
            "min_ram_speed"=> $request->min_ram_speed,
            "max_ram_speed"=> $request->max_ram_speed,
            "storage_slot"=> $request->storage_slot,
            "vga_slot"=> $request->vga_slot,
            "price"=> $request->price,
        ]);
        return response()->json([
            "status"=> 200,
            "data"=> $motherboard,
            "message"=> "success",
        ]);
    }
}
