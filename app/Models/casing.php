<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casing extends Model
{
    use HasFactory;
    protected $fillable = [
        "name","desc","image_url","stok","size","price",
    ] ;
}
