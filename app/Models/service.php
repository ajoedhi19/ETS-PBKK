<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    public function detail_pemesanan()
    {
        return $this->hasMany(detail_pemesanan::class);
    }
}