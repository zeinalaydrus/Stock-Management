<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raw extends Model
{
    use HasFactory;
    protected $table = 'raw';
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
