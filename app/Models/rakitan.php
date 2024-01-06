<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rakitan extends Model
{
    use HasFactory;
    protected $fillable = [
        "name","user_id","casing_id","motherboard_id","cpu_id","vga_id","cooler_id","psu_id","Total Price"
    ];
    public function listStorages()
    {
        return $this->hasMany(list_storage::class, 'rakitan_id', 'id');
    }

    public function listRams()
    {
        return $this->hasMany(list_ram::class, 'rakitan_id', 'id');
    }
    public function psu()
    {
        return $this->belongsTo(psu::class, 'psu_id', 'id');
    }

    public function vga()
    {
        return $this->belongsTo(vga::class, 'vga_id', 'id');
    }

    public function cooler()
    {
        return $this->belongsTo(cooler::class, 'cooler_id', 'id');
    }

    public function casing()
    {
        return $this->belongsTo(casing::class, 'casing_id', 'id');
    }
    public function cpu()
    {
        return $this->belongsTo(cpu::class, 'cpu_id', 'id');
    }public function motherboard()
    {
        return $this->belongsTo(motherboard::class, 'motherboard_id', 'id');
    }
}
