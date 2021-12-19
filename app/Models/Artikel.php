<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';
    protected $fillable = [
        'title', 'isiArtikel', 'ditulisOleh', 'kategori','refrensi','photo','penulis_id'
    ];
}
