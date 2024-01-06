<?php

namespace App\Http\Controllers;
use App\Models\rakitan;
use App\Models\list_ram;
use App\Models\list_storage;
use Illuminate\Http\Request;
class RakitanController extends Controller
{
    public function index(Request $request){
        $r = Rakitan::with(
            'listStorages',
            'listRams',
            'listRams.ram',
            'listStorages.storage',
            'cpu',
            'vga',
            'casing',
            'cooler',
            'psu',
            'motherboard',
            )->where('user_id',$request->user()->id)->get();
        return response()->json([
            "status"=> 200,
            "data"=> $r,
            "message"=> "success",
        ]);
    }
    public function create(Request $request)
{
    // Validate the request data as needed
    $request->validate([
        'name' => 'required|string',
    ]);

    // Create a new Rakitan
    $rakitan = Rakitan::create([
        'name' => $request->name,
        'user_id' => $request->user()->id,
        'casing_id' => $request->casing_id,
        'motherboard_id' => $request->motherboard_id,
        'cpu_id' => $request->cpu_id,
        'vga_id' => $request->vga_id,
        'cooler_id' => $request->cooler_id,
        'psu_id' => $request->psu_id,
        'Total Price' => $request->Total_Price
    ]);
    foreach ($request->list_storages as $storageId) {
        list_storage::create([
            'rakitan_id' => $rakitan->id,
            'storage_id' => $storageId,
        ]);
    }

    // Attach ListRams
    foreach ($request->list_rams as $ramId) {
        list_ram::create([
            'rakitan_id' => $rakitan->id,
            'ram_id' => $ramId,
        ]);
    }

    return response()->json([
        "status"=> 200,
        "data"=> $rakitan,
        "message"=> "success",
    ]);
}
}
