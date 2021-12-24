<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = 'penyakit';
    protected $fillable = [
        'namaPenyakit','deskripsiSingkat','photoPenyakit','ditulisOleh','gejala','penyebab','faktorRisiko','pengobatan','pencegahan'
    ];
}
