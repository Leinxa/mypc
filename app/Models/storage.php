<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storage extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "desc",
        "image_url",
        "type",
        "kapasitas",
        "stok",
        "price",
    ];
}
