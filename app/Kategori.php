<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'menu', 'type', 'satuan', 'harga'
    ];
}
