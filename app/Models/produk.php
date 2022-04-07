<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function detail_pemesanan()
    {
        return $this->hasMany(detail_pemesanan::class);
    }
}