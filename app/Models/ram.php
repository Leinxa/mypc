<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ram extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'size',
        'desc',
        'image_url',
        'type',
        'speed',
        'kapasitas',
        'stok',
        'price',        
    ];
}
