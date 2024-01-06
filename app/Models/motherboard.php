<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motherboard extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama","chipset","image_url","form_factor","desc","stok","ram_slot","min_ram_speed","max_ram_speed","storage_slot","storage_slot","vga_slot","price"
    ];
}
