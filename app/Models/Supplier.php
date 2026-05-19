<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nama_perusahaan',
        'nama_kontak',
        'telepon',
        'email',
        'alamat',
        'image',
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_supplier');
    }
}
