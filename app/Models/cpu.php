<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cpu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'decs',
        'type',
        'image_url',
        'stok',
        'price',        
    ];
}
