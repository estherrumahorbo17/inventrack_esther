<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'stok',
        'harga',
        'kondisi',
        'lokasi',
        'deskripsi',
        'image',
        'users_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'item_supplier');
    }
}
