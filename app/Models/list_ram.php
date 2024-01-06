<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_ram extends Model
{
    use HasFactory;
    protected $fillable = [
        "rakitan_id","ram_id"
    ];
    public function ram()
    {
        return $this->belongsTo(ram::class, 'ram_id', 'id');
    }
}
