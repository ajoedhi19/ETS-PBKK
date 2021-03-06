<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pemesanan extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    protected $casts = [
        'tanggal_pemesanan' => 'datetime',
    ];
    protected $guarded = ['id'];
    public function User()
    {
        return $this->belongsTo(User::class,'id_customer','id');
        
        
    }
    public $timestamps = false;
    public function service()
    {
        return $this->belongsTo(service::class);
    }
    public function produk()
    {
        return $this->belongsTo(produk::class);
    }
}