<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    protected $table = 'pemasukan';
    protected $fillable = [
        'product_id',
        'quantity',
        'tanggal_masuk',
        'bukti',
        'deskripsi',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
