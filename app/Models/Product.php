<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'image',
        'stock',
        'description'
    ];
    public function pengeluarans()
    {
        return $this->hasMany(Pengeluaran::class);
    }

    public function pemasukans()
    {
        return $this->hasMany(Pemasukan::class);
    }
}
