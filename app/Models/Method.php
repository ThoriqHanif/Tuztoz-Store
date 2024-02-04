<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function layanan()
    {
        return $this->belongsToMany(Layanan::class, 'paket_layanan', 'paket_id', 'layanan_id');
    }
}
