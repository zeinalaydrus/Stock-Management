<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $fillable = [
        'product_id',
        'quantity',
        'tanggal_keluar',
        'bukti',
        'deskripsi',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
