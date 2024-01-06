<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_storage extends Model
{
    use HasFactory;
    protected $fillable = [
        "rakitan_id","storage_id"
    ];
    public function storage()
    {
        return $this->belongsTo(storage::class, 'storage_id', 'id');
    }
}
