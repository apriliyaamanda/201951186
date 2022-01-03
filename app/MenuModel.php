<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $fillable = [
        'nama', 'menu', 'slug', 'type', 'satuan', 'harga'
    ];
}
