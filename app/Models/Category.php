<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
        'image',
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
