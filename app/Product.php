<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Maklumkan pada Model ini bahawa nama table adalah seperti berikut:
    protected $table = 'products';

    // Tetapkan apakah field / column yang boleh diisi
    protected $fillable = [
        'nama',
        'kos',
        'margin',
        'active'
    ];
}
